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
        return array_key_first(self::composerFile()['autoload']['psr-4']);
    }

    public static function composerFile(): array
    {
        return json_decode(file_get_contents(__DIR__.'/../../composer.json'), true);
    }
}
