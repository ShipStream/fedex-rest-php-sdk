<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Generators\NullGenerator;
use ShipStream\FedEx\Generator\Generators\RequestGenerator;
use ShipStream\FedEx\Generator\Generators\ResourceGenerator;

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
            connectorGenerator: new NullGenerator($config),
            requestGenerator: new RequestGenerator($config),
            resourceGenerator: new ResourceGenerator($config),
            fileHandler: new FileHandler($config),
        );
    }
}
