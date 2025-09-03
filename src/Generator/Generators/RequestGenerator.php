<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator as SDKRequestGenerator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;

class RequestGenerator extends SDKRequestGenerator
{
    protected function makeClass(string $className, array|string|null $namespaceSuffixes = []): array
    {
        return parent::makeClass($className, $this->config->namespaceSuffixes['request']);
    }

    protected function generateRequestClass(Endpoint $endpoint): PhpFile
    {
        // Get the generated class from parent
        $classFile = parent::generateRequestClass($endpoint);

        // If the original path had a trailing slash then keep it
        if (in_array($endpoint->name, $this->config->extra['operationIdsRequiringTrailingSlash'] ?? [])) {
            $classes = $classFile->getClasses();
            $class = reset($classes);
            $method = $class->getMethod('resolveEndpoint');

            // Use the same logic as parent but add trailing slash
            $method->setBody(
                collect($endpoint->pathSegments)
                    ->map(fn ($segment) => Str::startsWith($segment, ':')
                        ? sprintf('{$this->%s}', NameHelper::safeVariableName($segment))
                        : $segment
                    )
                    ->pipe(fn (Collection $segments) => sprintf('return "/%s/";', $segments->implode('/')))
            );
        }

        return $classFile;
    }
}
