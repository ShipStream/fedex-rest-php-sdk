<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Schema;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use InvalidArgumentException;
use stdClass;

class Refactorer
{
    public const REF_BASE = '#/components/schemas/';

    private stdClass $currentSchema;

    private stdClass $combined;

    private array $blacklistedComponents = [];

    /**
     * @param  stdClass[]  $schemas
     */
    public function __construct(
        private SchemaVersion $schemaVersion,
        private array $schemas
    ) {}

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
                // Standardize tags
                foreach ($operations as $method => $operation) {
                    $operation->tags = [$this->schemaVersion->studlyName()];
                }
                $operations->{$method} = $operation;
                $combined->paths->{$path} = $operations;
            }

            foreach ($this->currentSchema->components->schemas as $name => $component) {
                if (isset($component->required)) {
                    $required = array_merge(
                        $combined->components->schemas->{$name}->required ?? [],
                        $component->required ?? []
                    );
                    $component->required = array_unique($required);
                }

                foreach ($component->properties ?? [] as $property => $details) {
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

                // All FedEx endpoints are missing responses schemas for 429 responses
                if (! isset($operation->responses->{'429'})) {
                    $operation->responses->{'429'} = new stdClass;
                    $operation->responses->{'429'}->description = 'Too many requests.';
                    $operation->responses->{'429'}->content = new stdClass;
                    $operation->responses->{'429'}->content->{'application/json'} = new stdClass;
                    $operation->responses->{'429'}->content->{'application/json'}->schema = new stdClass;
                    $operation->responses->{'429'}->content->{'application/json'}->schema->{'$ref'} = $operation->responses->{'400'}->content->{'application/json'}->schema->{'$ref'} ?? '#/components/schemas/ErrorResponseVO';
                }

                if (isset($operation->requestBody)) {
                    foreach ($operation->requestBody->content as $contentType => $mediaType) {
                        if (isset($mediaType->schema->oneOf)) {
                            $mediaType->schema = $this->oneOf($mediaType->schema);
                            $operation->requestBody->content->{$contentType} = $mediaType;
                        }
                    }
                }

                $operations->{$method} = $operation;
            }

            $schema->paths->{$path} = $operations;
        }

        // Many schemas and properties are missing a type, so we add it in here if it's missing
        // to help with the generation process
        foreach ($schema->components->schemas as $componentName => $component) {
            // FedEx uses oneOf properties to show multiple examples for a particular
            // schema or endpoint, but most of them are not actual OpenAPI component definitions
            // and instead only contain example payloads.
            if (isset($component->oneOf)) {
                $component = $this->oneOf($component);
            } elseif (isset($component->allOf)) {
                $component = $this->allOf($component);
            } elseif (isset($component->properties)) {
                foreach ($component->properties as $property => $details) {
                    if (isset($details->oneOf)) {
                        $details = $this->oneOf($details);
                    } elseif (isset($details->items->oneOf)) {
                        $details->items = $this->oneOf($details->items);
                    } elseif (isset($details->allOf)) {
                        $details = $this->allOf($details);
                    } elseif (isset($details->items->allOf)) {
                        $details->items = $this->allOf($details->items);
                    }

                    $component->properties->{$property} = $details;
                }
            }

            $schema->components->schemas->{$componentName} = $this->setSchemaTypes($component);
        }

        $schema = $this->cleanRefs($schema);
        $schema = $this->deduplicateComponents($schema);

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
        } elseif (  // Sometimes there is an inline schema and a ref to an identical schema in an allOf
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

            $subComponentKeys = array_keys((array) $subComponent);
            if (array_diff($subComponentKeys, ['example', 'type']) === []) {
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

    protected function componentByRef(string $ref, ?stdClass $schema = null): stdClass|false
    {
        $schema = $schema ?? $this->combined ?? $this->currentSchema;
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
                        unset($property->type);
                    }

                    $component->properties->{$name} = $property;
                }
            } elseif (isset($component->items->schema->{'$ref'})) {
                $component->items->{'$ref'} = $component->items->schema->{'$ref'};
                unset($component->items->schema->{'$ref'});
            }

            $schema->components->schemas->{$componentName} = $component;
        }

        $schema = $this->removeUnusedComponents($schema);

        return $schema;
    }

    public function removeUnusedComponents(stdClass $schema): stdClass
    {
        $_schema = clone $schema;

        foreach ($_schema->components->schemas as $componentName => $component) {
            if (! static::jsonContains(self::REF_BASE.$componentName, $_schema)) {
                unset($_schema->components->schemas->{$componentName});
            }
        }

        return $_schema;
    }

    protected function deduplicateComponents(stdClass $schema): stdClass
    {
        $replaced = [];
        // Remove components that are just a $ref and nothing else
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
                $schema = self::jsonReplace('"'.self::REF_BASE.$name.'"', '"'.self::REF_BASE.$replacementName.'"', $schema);
                unset($schema->components->schemas->{$name});
            }
        }

        // Run in a loop to handle nested schema dependencies
        $maxIterations = 100; // Prevent infinite loops
        $iteration = 0;
        $hasChanges = true;
        while ($hasChanges && $iteration < $maxIterations) {
            $hasChanges = false;
            $iteration++;
            $originalComponentCount = count((array) $schema->components->schemas);

            $schema = $this->_deduplicateComponents($schema);

            // Check if we made any changes in this iteration
            $newComponentCount = count((array) $schema->components->schemas);
            if ($newComponentCount !== $originalComponentCount || ! empty($mergedComponents)) {
                $hasChanges = true;
            }
        }

        return $schema;
    }

    protected function _deduplicateComponents(stdClass $schema): stdClass
    {
        $buildPropTypesMap = function (stdClass $prop, string $propName) use ($schema): array {
            if (isset($prop->{'$ref'})) {
                $propType = $this->componentByRef($prop->{'$ref'}, $schema)->type;
                if ($propType === 'object') {
                    $propType .= ':'.$prop->{'$ref'};
                }
            } elseif ($prop->type === 'array') {
                if (isset($prop->items->{'$ref'})) {
                    $propType = $this->componentByRef($prop->items->{'$ref'}, $schema)->type;
                    if ($propType === 'object') {
                        $propType .= ':'.$prop->items->{'$ref'};
                    }
                } else {
                    $propType = $prop->items->type;
                }
                $propType = "array[$propType]";
            } else {
                $propType = $prop->type;
            }

            return [$propName => $propType];
        };

        $components = array_keys((array) $schema->components->schemas);
        $toReduce = [];
        $deduped = [];
        foreach ($components as $componentName) {
            $matches = [];

            // This matches schema components like Weight1, Weight_1, Weight_1_2, etc
            preg_match('/([A-Za-z_-]+)(_?\d)+$/U', $componentName, $matches);

            // If $componentName doesn't itself match the name structure of a duplicate,
            // check if there are any other components that are duplicates of $componentName
            if (! $matches) {
                $eligibleForMatch = array_diff($components, $deduped, [$componentName]);
                foreach ($eligibleForMatch as $c) {
                    preg_match('/^'.$componentName.'(_?\d)+$/', $c, $matches);
                    if ($matches) {
                        $baseName = $componentName;
                        break;
                    }
                }
            } else {
                $baseName = $matches[1];
            }

            if ($matches && ! in_array($componentName, $deduped)) {
                // And this finds components with similar names, including the base name without
                // any trailing numbers. E.g., Weight_1, Weight_1_2, and Weight
                $dupeNames = array_filter(
                    $components,
                    fn ($c) => preg_match('/^'.$baseName.'(_?\d)*$/', $c) && $c !== $componentName
                );

                $dupes = Arr::mapWithKeys(
                    $dupeNames,
                    fn ($dupe) => [$dupe => $this->componentByRef(self::REF_BASE.$dupe, $schema)]
                );

                $component = $this->componentByRef(self::REF_BASE.$componentName, $schema);
                if (! isset($component->properties)) {
                    continue;
                }

                $componentProps = Arr::mapWithKeys(
                    (array) $component->properties,
                    fn ($p, $k) => $buildPropTypesMap($p, $k),
                );
                ksort($componentProps);

                $toReduce[$baseName][$componentName] = [$componentName => $component];

                // Compare each other duplicated component to $component
                foreach ($dupes as $name => $dupe) {
                    if (in_array($name, $deduped) || ! isset($dupe->properties)) {
                        continue;
                    }

                    $props = Arr::mapWithKeys(
                        (array) $dupe->properties,
                        fn ($p, $k) => $buildPropTypesMap($p, $k),
                    );
                    ksort($props);

                    // If the current component's props match $firstDupe's props, mark them for
                    // combination
                    if ($props === $componentProps) {
                        $deduped[] = $name;
                        $toReduce[$baseName][$componentName][$name] = $dupe;
                    }
                }
            }

            if (! $matches && ! in_array($componentName, $deduped)) {
                $deduped[] = $componentName;
            }
        }

        $tempNames = [];
        $mergedComponents = [];
        foreach ($toReduce as $baseName => $groups) {
            foreach ($groups as $group) {
                $uuid = Str::uuid();
                $tempComponentName = "{$baseName}_{$uuid}";
                $allRequiredArrays = [];

                foreach ($group as $member => $definition) {
                    $tempNames[$baseName][$member] = $tempComponentName;
                    $allRequiredArrays[] = $definition->required ?? [];
                }

                // Only require fields that ALL schemas require (intersection)
                $requiredProps = array_intersect(...$allRequiredArrays);

                if ($requiredProps) {
                    $definition->required = array_values($requiredProps);
                }
                $mergedComponents[$tempComponentName] = $definition;
            }
        }

        foreach ($mergedComponents as $tempName => $definition) {
            $schema->components->schemas->{$tempName} = $definition;
        }

        foreach ($tempNames as $baseName => $replaceNames) {
            foreach ($replaceNames as $original => $tempReplacement) {
                unset($schema->components->schemas->{$original});
                $schema = self::jsonReplace(
                    '"'.self::REF_BASE.$original.'"',
                    '"'.self::REF_BASE.$tempReplacement.'"',
                    $schema
                );
            }
        }

        foreach ($tempNames as $baseName => $members) {
            $uniqueTempNames = array_values(array_unique($members));
            foreach ($uniqueTempNames as $i => $temp) {
                $nameIdx = $i + 1;
                // It makes a little more sense to have Component and Component_2 instead of
                // Component and Component_1
                $finalName = $i === 0 ? $baseName : "{$baseName}_{$nameIdx}";

                $schema->components->schemas->{$finalName} = $schema->components->schemas->{$temp};
                unset($schema->components->schemas->{$temp});

                $schema = self::jsonReplace(
                    self::REF_BASE.$temp,
                    self::REF_BASE.$finalName,
                    $schema
                );
            }
        }

        return $schema;
    }

    protected static function jsonContains(string $find, stdClass $json): bool
    {
        return str_contains(
            json_encode($json, JSON_UNESCAPED_SLASHES),
            $find
        );
    }

    protected static function jsonReplace(string $find, string $replace, stdClass $json): stdClass
    {
        return json_decode(str_replace(
            $find,
            $replace,
            json_encode($json, JSON_UNESCAPED_SLASHES),
        ));
    }
}
