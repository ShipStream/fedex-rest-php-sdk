<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator as SDKRequestGenerator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;
use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\NullAuthenticator;
use Saloon\RateLimitPlugin\Contracts\RateLimitStore;
use Saloon\RateLimitPlugin\Limit;
use Saloon\RateLimitPlugin\Stores\MemoryStore;
use Saloon\RateLimitPlugin\Traits\HasRateLimits;

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

        if ($endpoint->name === 'API Authorization') {
            // Add rate limit to authorization API to avoid triggering a 10min lockout
            $namespaces = $classFile->getNamespaces();
            $namespace = reset($namespaces);
            $namespace->addUse(HasRateLimits::class);
            $namespace->addUse(Limit::class);
            $namespace->addUse(RateLimitStore::class);
            $namespace->addUse(MemoryStore::class);
            $classes = $classFile->getClasses();
            $class = reset($classes);
            $class->addTrait(HasRateLimits::class);
            $class->addMethod('resolveLimits')
                ->setPublic()
                ->setReturnType('array')
                ->addBody('return [')
                ->addBody("    Limit::allow(requests: 14)->everySeconds(5)->name('burst-threshold'),")
                ->addBody("    Limit::allow(requests: 119)->everySeconds(120)->name('average-threshold'),")
                ->addBody('];');
            $class->addMethod('resolveRateLimitStore')
                ->setPublic()
                ->setReturnType(RateLimitStore::class)
                ->addBody('return new MemoryStore();');

            $constructor = $class->getMethod('__construct');
            $constructor->addParameter('rateLimitStore')
                ->setDefaultValue(null)
                ->setNullable(true)
                ->setType(RateLimitStore::class);
            $constructor->addBody('$this->rateLimitStore = $rateLimitStore;');

            // Disable authorization for authorization API
            $namespace->addUse(Authenticator::class);
            $namespace->addUse(NullAuthenticator::class);
            $class->addMethod('defaultAuth')
                ->setPublic()
                ->setReturnType(Authenticator::class)
                ->addBody('return new NullAuthenticator();');
        }

        return $classFile;
    }
}
