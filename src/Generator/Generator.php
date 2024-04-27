<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;

class Generator
{
    /**
     * The code of the API currently being generated, if any.
     */
    public static ?string $currentlyGenerating = null;

    /**
     * Create a new code generator instance.
     */
    public static function make(array $overrides = []): CodeGenerator
    {
        $config = Config::load(__DIR__.'/../../config.json', $overrides);

        return new CodeGenerator(
            $config,
            fileHandler: new FileHandler($config),
        );
    }
}
