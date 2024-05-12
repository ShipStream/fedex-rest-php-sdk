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
                    // Standardize tags
                    $operation->tags = [$this->schemaVersion->studlyName()];

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

    /**
     * This method does any cleanup on the combined schemas that doesn't make sense to do
     * via the modifications.json file, usually because it's a relatively consistent schema
     * issue across multiple schema files.
     */
    public function clean(): stdClass
    {
        if (! $this->combined) {
            throw new Exception('Must run Refactorer::combine() before cleaning.');
        }

        $schema = clone $this->combined;

        foreach ($schema->paths as $path => $operations) {
            foreach ($operations as $method => $operation) {
                $mediaType = $operation->responses->{'404'}?->content?->{'application/json'} ?? null;

                // Several FedEx endpoints are missing responses schemas for 404 responses, and instead
                // only have example payloads. This assigns schemas to those 404 responses missing them.
                if ($mediaType && array_keys((array) $mediaType ?? []) === ['example']) {
                    $mediaTypeSchema = new stdClass;
                    $mediaTypeSchema->{'$ref'} = '#/components/schemas/ErrorResponseVO';
                    $mediaType->schema = $mediaTypeSchema;
                    $operation->responses->{'404'}->content->{'application/json'} = $mediaType;
                }

                $operations->{$method} = $operation;
            }

            $schema->paths->{$path} = $operations;
        }

        $schema = $this->cleanRefs($schema);
        $schema = $this->deduplicateComponents($schema);

        // Many schemas and properties are missing a type, so we add it in here if it's missing
        // to help with the generation process
        foreach ($schema->components->schemas as $componentName => $component) {
            $schema->components->schemas->{$componentName} = $this->setSchemaTypes($component);
        }

        $this->combined = $schema;

        return $this->combined;
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
                data_forget($this->combined, $mod->path);
            } else {
                data_set($this->combined, $mod->path, $modified);
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
            if (isset($allOf[0]->{'$ref'})) {
                $referenced = $this->componentByRef($allOf[0]->{'$ref'});
                if (isset($referenced->type)) {
                    $obj->type = $referenced->type;
                }
            } elseif (isset($allOf[0]->type)) {
                $obj->type = $allOf[0]->type;
            }

            $obj->schema = $allOf[0];
            data_forget($obj, 'allOf');
        } elseif (
            count($allOf) === 2
            && (
                (isset($allOf[0]->{'$ref'}) && isset($allOf[1]->properties))
                || (isset($allOf[0]->properties) && isset($allOf[1]->{'$ref'}))
            )
        ) {
            $referenceSchemaIdx = isset($allOf[0]->{'$ref'}) ? 0 : 1;
            $reference = $allOf[$referenceSchemaIdx]->{'$ref'};
            $referenced = $this->componentByRef($reference);
            $inlineSchema = $allOf[abs($referenceSchemaIdx - 1)];

            $referencedType = $referenced->type ?? null;
            if ($referencedType !== 'object') {
                $obj->allOf = $allOf;

                return $obj;
            }

            $referencedProps = array_keys((array) $referenced->properties ?? []);
            $inlineProps = array_keys((array) $inlineSchema->properties ?? []);

            if (array_diff($inlineProps, $referencedProps) !== []) {
                $obj->allOf = $allOf;
            } else {
                $obj->schema = $allOf[$referenceSchemaIdx];
                data_forget($obj, 'allOf');
            }
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

        $fullRef = $ref;
        do {
            $exploded = explode('/', $fullRef);
            $subComponentName = end($exploded);

            $component = $schema->components->schemas->{$subComponentName} ?? false;
            if (isset($component->{'$ref'})) {
                $fullRef = $component->{'$ref'};
            } else {
                $fullRef = null;
            }
        } while ($fullRef !== null);

        return $component;
    }

    protected static function baseSchema(): stdClass
    {
        $schema = new stdClass;
        $schema->paths = new stdClass;
        $schema->components = new stdClass;
        $schema->components->schemas = new stdClass;

        return $schema;
    }

    protected function setSchemaTypes(stdClass $schema): stdClass
    {
        $defaultType = 'string';

        $multiTypeKeys = ['allOf', 'oneOf'];
        foreach ($multiTypeKeys as $key) {
            if (isset($schema->{$key})) {
                foreach ($schema->{$key} as $i => $subSchema) {
                    $schema->{$key}[$i] = $this->setSchemaTypes($subSchema);
                }

                return $schema;
            }
        }

        if (isset($schema->{'$ref'})) {
            return $schema;
        }

        if (isset($schema->properties)) {
            $schema->type = 'object';
            foreach ($schema->properties as $propName => $prop) {
                if (! isset($prop->type) && ! isset($prop->{'$ref'})) {
                    $ref = $prop->{'$ref'} ?? false;
                    $type = null;
                    if ($ref) {
                        $referenced = $this->componentByRef($ref);
                        if (isset($referenced->type)) {
                            $type = $referenced->type;
                        } else {
                            $type = 'object';
                        }
                    } elseif (isset($prop->properties)) {
                        $type = 'object';
                        $schema->properties->{$propName} = $this->setSchemaTypes($prop);
                    } else {
                        $type = $defaultType;
                    }
                    data_set($schema, "properties.{$propName}.type", $type);
                } elseif (
                    isset($prop->type)
                    && $prop->type === 'array'
                    && ! isset($prop->items->{'$ref'})
                    && ! isset($prop->items->type)
                ) {
                    $type = $defaultType;
                    if (isset($prop->{'$ref'})) {
                        $referenced = $this->componentByRef($prop->{'$ref'});
                        if (isset($referenced->type)) {
                            $type = $referenced->type;
                        } else {
                            $type = 'object';
                        }
                    }
                    data_set($schema, "properties.{$propName}.items.type", $type);
                }
            }
        } elseif (isset($schema->items)) {
            if (! isset($schema->items->type)) {
                data_set($schema, 'items.type', $defaultType);
            }
        } elseif (! isset($schema->type)) {
            $schema->type = $defaultType;
        }

        return $schema;
    }

    protected function cleanRefs(stdClass $schema): stdClass
    {
        foreach ($schema->components->schemas as $componentName => $component) {
            if (isset($component->schema->{'$ref'})) {
                $component->{'$ref'} = $component->schema->{'$ref'};
                unset($component->schema);
            } elseif (isset($component->properties)) {
                foreach ($component->properties as $name => $property) {
                    if (isset($property->schema->{'$ref'})) {
                        $property->{'$ref'} = $property->schema->{'$ref'};
                        unset($property->schema);
                    }
                    $component->properties->{$name} = $property;
                }
            } elseif (isset($component->items->schema->{'$ref'})) {
                $component->items->{'$ref'} = $component->items->schema->{'$ref'};
                unset($component->items->schema->{'$ref'});
            }

            $schema->components->schemas->{$componentName} = $component;
        }

        return $schema;
    }

    protected function deduplicateComponents(stdClass $schema): stdClass
    {
        $refBase = '#/components/schemas/';
        $replaced = [];
        foreach ($schema->components->schemas as $name => $component) {
            $ref = $component->{'$ref'} ?? false;
            if ($ref) {
                $refComponents = explode('/', $ref);
                $refName = end($refComponents);

                foreach ($replaced as $old => $repl) {
                    if ($repl === $name) {
                        $replaced[$old] = $refName;
                    }
                }
                $replaced[$name] = $replaced[$refName] ?? $refName;

                $replacementName = $replaced[$name];
                $schema = self::jsonReplace("\"$refBase$name\"", "\"$refBase$replacementName\"", $schema);
                unset($schema->components->schemas->{$name});
            }
        }

        return $schema;
    }

    protected static function jsonReplace(string $find, string $replace, stdClass $json): stdClass
    {
        return json_decode(str_replace(
            $find,
            $replace,
            json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES),
        ));
    }
}
