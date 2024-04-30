<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Schema;

use Exception;
use InvalidArgumentException;
use stdClass;

class Refactorer
{
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
            if (! isset($combined->info)) {
                $combined->openapi = $originalSchema->openapi;
                $combined->info = $originalSchema->info;
            }

            foreach ($originalSchema->paths as $path => $operations) {
                $combined->paths->{$path} = $operations;
            }

            foreach ($originalSchema->components->schemas as $name => $component) {
                // FedEx uses oneOf properties to show multiple examples for a particular
                // schema or endpoint, but most of them are not actual OpenAPI component definitions
                // and instead only contain example payloads.
                if (isset($component->oneOf)) {
                    $oneOf = [];
                    foreach ($component->oneOf as $refObj) {
                        $exploded = explode('/', $refObj->{'$ref'});
                        $subComponentName = end($exploded);
                        $subComponent = $originalSchema->components->schemas->{$subComponentName};

                        if (array_keys(get_object_vars($subComponent)) === ['example']) {
                            $this->blacklistedComponents[] = $subComponentName;

                            continue;
                        }

                        $oneOf[] = $refObj;
                    }
                } elseif (isset($component->allOf)) {
                    $component = $this->allOf($component);
                }

                $originalComponent = $originalSchema->components->schemas->{$name} ?? new stdClass;

                if (isset($originalComponent->required)) {
                    $required = array_merge(
                        $combined->components->schemas->{$name}->required ?? [],
                        $component->required ?? []
                    );
                    $component->required = array_unique($required);
                }

                foreach ($originalComponent->properties ?? [] as $property => $details) {
                    if (! isset($component->properties)) {
                        $component->properties = new stdClass;
                    }

                    if (isset($details->allOf)) {
                        $details = $this->allOf($details);
                    }

                    if (! isset($component->properties->{$property})) {
                        $component->properties->{$property} = $details;
                    }
                }

                // Note: our oneOf handling assumes that there will never be two raw schema files
                // with overlapping components, with one having a oneOf and the other not. There
                // currently are not any examples of that happening in the FedEx API schemas.
                if (isset($component->oneOf) && count($oneOf) === 1) {
                    $component = (object) ['$ref' => $component->oneOf[0]->{'$ref'}];
                }

                $combined->components->schemas->{$name} = $component;
            }
        }

        foreach ($this->blacklistedComponents as $component) {
            unset($combined->components->schemas->{$component});
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

    protected static function baseSchema(): stdClass
    {
        $schema = new stdClass;
        $schema->paths = new stdClass;
        $schema->components = new stdClass;
        $schema->components->schemas = new stdClass;

        return $schema;
    }
}
