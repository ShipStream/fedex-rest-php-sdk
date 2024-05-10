<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator;

class Package
{
    /**
     * Get the current version code for the package.
     */
    public static function version(): string
    {
        return self::composerFile()['version'];
    }

    /**
     * Get the package's name.
     */
    public static function name(): string
    {
        return self::composerFile()['name'];
    }

    /**
     * Get the base namespace for the package.
     */
    public static function namespace(): string
    {
        $config = json_decode(file_get_contents(GENERATOR_CONFIG_FILE), true);

        return $config['namespace'];
    }

    public static function composerFile(): array
    {
        return json_decode(file_get_contents(__DIR__.'/../../composer.json'), true);
    }
}
