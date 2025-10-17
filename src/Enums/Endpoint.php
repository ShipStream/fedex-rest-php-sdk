<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Enums;

use ShipStream\FedEx\Traits\EnumTrait;

enum Endpoint: string
{
    use EnumTrait;

    case PROD = 'https://apis.fedex.com';
    case SANDBOX = 'https://apis-sandbox.fedex.com';
    case PROD_DOCUMENTS_UPLOAD = 'https://documentapi.prod.fedex.com';
    case SANDBOX_DOCUMENTS_UPLOAD = 'https://documentapitest.prod.fedex.com/sandbox';

    public static function host(Endpoint $endpoint): string
    {
        return parse_url($endpoint->value, PHP_URL_HOST) ?: '';
    }

    public function getProductionEndpoint(): self
    {
        return $this->_getEndpointPair($this, false);
    }

    public function getSandboxEndpoint(): self
    {
        return $this->_getEndpointPair($this, true);
    }

    public function isProduction(): bool
    {
        return $this->_getEndpointPair($this, false) === $this;
    }

    public function isSandbox(): bool
    {
        return $this->_getEndpointPair($this, true) === $this;
    }

    private function _getEndpointPair(Endpoint $endpoint, bool $sandbox): Endpoint
    {
        return match ($endpoint) {
            Endpoint::PROD, Endpoint::SANDBOX => $sandbox ? Endpoint::SANDBOX : Endpoint::PROD,
            Endpoint::PROD_DOCUMENTS_UPLOAD, Endpoint::SANDBOX_DOCUMENTS_UPLOAD => $sandbox ? Endpoint::SANDBOX_DOCUMENTS_UPLOAD : Endpoint::PROD_DOCUMENTS_UPLOAD,
            default => throw new \Exception('Unknown FedEx endpoint.')
        };
    }
}
