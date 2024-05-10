<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Generators;

use Crescat\SaloonSdkGenerator\Generators\RequestGenerator as SDKRequestGenerator;

class RequestGenerator extends SDKRequestGenerator
{
    protected function makeClass(string $className, array|string|null $namespaceSuffixes = []): array
    {
        return parent::makeClass($className, $this->config->namespaceSuffixes['request']);
    }
}
