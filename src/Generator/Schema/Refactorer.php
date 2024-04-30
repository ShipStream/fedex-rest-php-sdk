<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Schema;

use Exception;
use InvalidArgumentException;
use stdClass;

class Refactorer
{
    private stdClass $currentSchema;

    private stdClass $combined;

    private array $blacklistedComponents = [];

    /**
     * @param  stdClass[]  $schemas
     */
    public function __construct(
        private SchemaVersion $schemaVersion,
        private array $schemas
    ) {
    }

    public function combine(): void
    {
        $combined = static::baseSchema();

        foreach ($this->schemas as $originalSchema) {
            // Only need to get the info and openapi properties from the first schema file
            if (! isset($this->currentSchema)) {
                $combined->openapi = $originalSchema->openapi;
                $combined->info = $originalSchema->info;
            }

            $this->currentSchema = $originalSchema;

            foreach ($this->currentSchema->paths as $path => $operations) {
                foreach ($operations as $method => $operation) {
                    if (isset($operation->requestBody)) {
                        foreach ($operation->requestBody->content as $contentType => $mediaType) {
                            if (isset($mediaType->schema->oneOf)) {
                                $mediaType->schema = $this->oneOf($mediaType->schema);
                                $operation->requestBody->content->{$contentType} = $mediaType;
                            }
                        }
                    }
                }
                $operations->{$method} = $operation;
                $combined->paths->{$path} = $operations;
            }

            foreach ($this->currentSchema->components->schemas as $name => $component) {
                // FedEx uses oneOf properties to show multiple examples for a particular
                // schema or endpoint, but most of them are not actual OpenAPI component definitions
                // and instead only contain example payloads.
                if (isset($component->oneOf)) {
                    $component = $this->oneOf($component);
                } elseif (isset($component->allOf)) {
                    $component = $this->allOf($component);
                }

                if (isset($component->required)) {
                    $required = array_merge(
                        $combined->components->schemas->{$name}->required ?? [],
                        $component->required ?? []
                    );
                    $component->required = array_unique($required);
                }

                foreach ($component->properties ?? [] as $property => $details) {
                    if (! isset($component->properties)) {
                        $component->properties = new stdClass;
                    }

                    if (isset($details->allOf)) {
                        $details = $this->allOf($details);
                    } elseif (isset($details->items->allOf)) {
                        $details->items = $this->allOf($details->items);
                    }

                    if (! isset($component->properties->{$property})) {
                        $component->properties->{$property} = $details;
                    }
                }

                $combined->components->schemas->{$name} = $component;
            }

            unset($this->currentSchema);
        }

        foreach ($this->blacklistedComponents as $component) {
            $exploded = explode('/', $component);
            $name = end($exploded);
            unset($combined->components->schemas->{$name});
        }

        $this->combined = $combined;
    }

    public function applyModifications(): stdClass
    {
        if (! $this->combined) {
            throw new Exception('Must run Refactorer::combine() before applying modifications.');
        }

        $modifications = json_decode(file_get_contents(METADATA_DIR.'/modifications.json'));
        $schemaMods = data_get($modifications, $this->schemaVersion->id(), []);

        foreach ($schemaMods as $mod) {
            $original = data_get($this->combined, $mod->path);
            $modified = match ($mod->action) {
                'delete' => null,
                'replace' => $mod->value,
                'merge' => match (true) {
                    is_array($original) => array_merge($original, $mod->value),
                    is_object($original) => (object) array_merge((array) $original, (array) $mod->value),
                    default => throw new InvalidArgumentException('Cannot merge scalar schema values'),
                },
                default => throw new InvalidArgumentException("Invalid schema modification action '{$mod->action}'"),
            };

            if ($modified === null) {
                data_forget($schema, $mod->path);
            } else {
                data_set($schema, $mod->path, $modified);
            }
        }

        return $this->combined;
    }

    protected function allOf(stdClass $obj): stdClass
    {
        $allOf = [];
        foreach ($obj->allOf as $allOfSchema) {
            // Sometimes one of the allOf "schemas" is just a description or an example with no schema
            $keys = array_keys((array) $allOfSchema);
            if ($keys === ['description'] || $keys === ['example']) {
                continue;
            }

            $allOf[] = $allOfSchema;
        }

        if (count($allOf) === 1) {
            $obj->schema = $allOf[0];
            data_forget($obj, 'allOf');
        } else {
            $obj->allOf = $allOf;
        }

        return $obj;
    }

    protected function oneOf(stdClass $obj): stdClass
    {
        $oneOf = [];
        foreach ($obj->oneOf as $refObj) {
            $ref = $refObj->{'$ref'};
            $subComponent = $this->componentByRef($ref);

            if (array_keys((array) $subComponent) === ['example']) {
                $this->blacklistedComponents[] = $ref;

                continue;
            }

            $oneOf[] = $refObj;
        }

        // Note: our oneOf handling assumes that there will never be two raw schema files
        // with overlapping components, with one having a oneOf and the other not. There
        // currently are not any examples of that happening in the FedEx API schemas.
        if (isset($obj->oneOf) && count($oneOf) === 1) {
            $obj = (object) ['$ref' => $obj->oneOf[0]->{'$ref'}];
        } else {
            $obj->oneOf = $oneOf;
        }

        return $obj;
    }

    protected function componentByRef(string $ref): stdClass|false
    {
        $schema = $this->combined ?? $this->currentSchema;
        if (! $schema) {
            throw new Exception('Cannot get component by ref without a schema');
        }

        $exploded = explode('/', $ref);
        $subComponentName = end($exploded);

        return $schema->components->schemas->{$subComponentName} ?? false;
    }

    protected static function baseSchema(): stdClass
    {
        $schema = new stdClass;
        $schema->paths = new stdClass;
        $schema->components = new stdClass;
        $schema->components->schemas = new stdClass;

        return $schema;
    }
}
