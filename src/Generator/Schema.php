<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator;

use InvalidArgumentException;
use ShipStream\FedEx\Generator\Schema\SchemaVersion;

class Schema
{
    public const API_DATA_FILE = RESOURCE_DIR.'/apis.json';

    /**
     * The human-readable name of this schema.
     */
    public string $name;

    /**
     * The versions of this schema (as SchemaVersion objects).
     *
     * @var array<SchemaVersion>
     */
    private array $versions = [];

    /**
     * The decoded JSON data from the apis.json file.
     */
    private static array $allSchemaData;

    public function __construct(public string $code)
    {
        if (! static::$allSchemaData) {
            static::loadSchemaData();
        }

        $apiData = static::$allSchemaData[$this->code];
        $this->name = $apiData['name'];

        $latestVersionIdx = count($apiData['versions']) - 1;
        foreach ($apiData['versions'] as $i => $version) {
            $this->versions[] = new SchemaVersion(
                $this,
                $version['url'],
                // Casting to string because json_decode automatically casts numeric strings to ints
                (string) $version['version'],
                latest: $i === $latestVersionIdx,
                deprecated: $version['deprecated'] ?? false,
                selector: $version['selector'] ?? null,
            );
        }
    }

    /**
     * Download all the versions of this schema.
     */
    public function download(): void
    {
        $savePath = $this->path(true);
        if (! file_exists($savePath)) {
            mkdir($savePath, 0755, true);
        }

        foreach ($this->versions as $version) {
            $version->download();
        }
    }

    /**
     * Convert a raw Amazon schema to the schema format we need for generating code.
     *
     * @return string The path to the folder containing each of the converted versions of this schema.
     */
    public function refactor(): string
    {
        foreach ($this->versions as $version) {
            $version->refactor();
        }

        return $this->path();
    }

    /**
     * Generate code for all the versions of this schema.
     */
    public function generate(): void
    {
        foreach ($this->versions as $version) {
            $version->generate();
        }
    }

    /**
     * Get the path where versions of this schema are stored.
     *
     * @param  bool  $upstream  If true, return the path where original Amazon schemas are stored.
     */
    public function path(bool $upstream = false): string
    {
        return MODEL_DIR.($upstream ? '/.raw' : '')."/{$this->code}";
    }

    /**
     * Get all schemas.
     *
     * @return array<Schema>
     */
    public static function all(): array
    {
        return static::where([], []);
    }

    /**
     * Get metadata about each of the schemas that match the given filters.
     * If $categories and/or $schemas are null, then all categories and/or
     * schemas will be included.
     *
     * @param  array|null  $schemas
     * @param  array|null  $versions
     * @return array<Schema> All the schemas that match the given filters.
     *
     * @throws InvalidArgumentException
     */
    public static function where(array $apiCodes, array $versions): array
    {
        static::loadSchemaData();

        $allApis = array_keys(static::$allSchemaData);
        if ($apiCodes === []) {
            $apis = $allApis;
        } else {
            $apis = array_intersect($allApis, $apiCodes);
        }

        $schemas = [];
        foreach ($apis as $code) {
            $availableVersions = static::$allSchemaData[$code]['versions'];
            foreach ($availableVersions as $version) {
                if ($versions === [] || in_array($version, $versions)) {
                    $schemas[] = new Schema($code, $version);
                }
            }
        }

        return $schemas;
    }

    /**
     * Load the raw schema data from resources/apis.json.
     */
    private static function loadSchemaData(): void
    {
        static::$allSchemaData = json_decode(file_get_contents(static::API_DATA_FILE), true);
    }
}
