<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Traits;

use DateTime;
use ReflectionClass;
use ShipStream\FedEx\Exceptions\InvalidAttributeTypeException;

trait Deserializes
{
    use HasComplexArrayTypes;

    public static function deserialize(mixed $data): mixed
    {
        if (is_null($data)) {
            return null;
        }

        $reflectionClass = new ReflectionClass(static::class);
        $constructor = $reflectionClass->getConstructor();
        if (! $constructor) {
            throw new InvalidAttributeTypeException('Class to be deserialized must have a constructor');
        }
        $reflectionParams = $constructor->getParameters() ?? [];

        $attributeTypes = [];
        $deserializedParams = [];
        foreach ($reflectionParams as $param) {
            $name = $param->getName();
            $type = $param->getType()->getName();

            // `array` could either be read as a simple PHP array, or a typed array that
            // we want to deserialize into an array of objects
            if ($type === 'array') {
                $type = static::getArrayType($name);
            }

            $attributeTypes[$name] = $type;
        }

        $hasAttributeMap = $reflectionClass->hasProperty('attributeMap');
        $attributeMap = $hasAttributeMap
            ? array_flip($reflectionClass->getProperty('attributeMap')->getValue())
            : [];

        foreach ($data as $rawKey => $value) {
            $key = $rawKey;
            if ($hasAttributeMap) {
                $key = $attributeMap[$rawKey] ?? $key;
            }

            if (! array_key_exists($key, $attributeTypes)) {
                continue;
            }
            $deserializedParams[$key] = static::deserializeValue($value, $attributeTypes[$key]);
        }

        return new static(...$deserializedParams);
    }

    protected static function deserializeValue(mixed $value, array|string $type): mixed
    {
        if (is_string($type)) {
            // Not using SimpleType enum to avoid needing to import the enum in the generated code
            $_value = match ($type) {
                'int' => (int) $value,
                'float' => (float) $value,
                'bool' => (bool) $value,
                'string' => (string) $value,
                'date', 'datetime' => DateTime::createFromFormat(DateTime::RFC3339, $value),
                'array', 'mixed' => $value,
                'null' => null,
                default => chr(0),
            };

            if ($_value !== chr(0)) {
                return $_value;
            }

            if (! class_exists($type)) {
                throw new InvalidAttributeTypeException("Class `$type` does not exist");
            } elseif ($type === DateTime::class) {
                return DateTime::createFromFormat(DateTime::RFC3339, $value);
            }

            $deserialized = $type::deserialize($value);

            return $type::deserialize($value);
        } elseif (is_array($type)) {
            // Handle optional complex array types
            if ($value === null) {
                return null;
            }

            $deserialized = [];
            foreach ($value as $item) {
                $deserialized[] = static::deserializeValue($item, $type[0]);
            }

            return $deserialized;
        }

        throw new InvalidAttributeTypeException("Invalid type `$type`");
    }
}
