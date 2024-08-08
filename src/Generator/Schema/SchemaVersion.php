<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Schema;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use ShipStream\FedEx\Generator\Generator;
use ShipStream\FedEx\Generator\Package;
use ShipStream\FedEx\Generator\Schema;

class SchemaVersion
{
    public function __construct(
        public Schema $schema,
        public string|array $url,
        public string $version,
        public bool $latest = false,
        public bool $deprecated = false,
        public ?string $selector = null,
    ) {
    }

    /**
     * Generate the code for this version of this schema.
     */
    public function generate(): void
    {
        $schemaVersionCode = $this->id();
        Generator::$currentlyGenerating = $schemaVersionCode;

        $baseNamespace = Package::namespace();
        $schemaNamespace = $this->studlyName();

        $inputPath = $this->path();
        $generator = Generator::make([
            'namespace' => $baseNamespace.'\\'.$schemaNamespace,
            'outputDir' => "src/Api/$schemaNamespace",
        ]);
        $result = $generator->run($inputPath);
        $result->dumpFiles();

        Generator::$currentlyGenerating = null;
    }

    public function refactor(): void
    {
        $rawPath = $this->path(true);
        $inDir = scandir($rawPath);
        $schemaFiles = array_filter($inDir, fn ($file) => is_file("$rawPath/$file"));

        $schemas = [];
        foreach ($schemaFiles as $schemaFile) {
            $schemas[] = json_decode(file_get_contents("$rawPath/$schemaFile"));
        }

        $refactorer = new Refactorer($this, $schemas);
        // Combine the schemas into a single schema
        $refactorer->combine();
        // Clean up the combined schema
        $refactorer->clean();
        // Apply manual modifications to the schema (from resources/metadata/modifications.json)
        $refactored = $refactorer->applyModifications();
        // Finally, remove any components that were made unnecessary by manual modifications
        $refactored = $refactorer->removeUnusedComponents($refactored);

        $path = $this->path();
        $pathDir = dirname($path);
        if (! is_dir($pathDir)) {
            mkdir($pathDir, 0755, true);
        }
        file_put_contents(
            $path,
            json_encode($refactored, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
    }

    /**
     * Download the schema.
     */
    public function download(): void
    {
        if (! is_array($this->url)) {
            $this->url = [$this->url];
        }

        $path = $this->path(true);
        foreach ($this->url as $url) {
            $client = new Client();
            $res = $client->get($url);
            $json = json_decode($res->getBody()->getContents());

            if (! is_dir($path)) {
                mkdir($path, 0755, true);
            }

            $fname = basename($url);
            file_put_contents(
                "{$path}/{$fname}",
                json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
            );
        }
    }

    /**
     * Get the path for this schema version.
     *
     * @param  bool  $upstream  If true, return the path where original Amazon schemas are stored.
     */
    public function path(bool $upstream = false): string
    {
        $ext = $upstream ? '' : '.json';

        return "{$this->schema->path($upstream)}/v{$this->version}{$ext}";
    }

    public function studlyName(): string
    {
        return Str::studly($this->schema->name).'V'.str_replace('-', '', $this->version);
    }

    public function id(): string
    {
        return "{$this->schema->code}.{$this->version}";
    }
}
