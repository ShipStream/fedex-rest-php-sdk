<?php

declare(strict_types=1);

namespace ShipStream\FedEx;

use InvalidArgumentException;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use ShipStream\FedEx\Api\AddressValidationV1;
use ShipStream\FedEx\Api\AuthorizationV1;
use ShipStream\FedEx\Api\AuthorizationV1\Dto\FullSchema;
use ShipStream\FedEx\Api\AuthorizationV1\Requests\ApiAuthorization;
use ShipStream\FedEx\Api\FreightLTLV1;
use ShipStream\FedEx\Api\GroundEODCloseV1;
use ShipStream\FedEx\Api\LocationsSearchV1;
use ShipStream\FedEx\Api\OpenShipV1;
use ShipStream\FedEx\Api\PickupRequestV1;
use ShipStream\FedEx\Api\PostalCodeValidationV1;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1;
use ShipStream\FedEx\Api\ShipV1;
use ShipStream\FedEx\Api\TrackV1;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1;
use ShipStream\FedEx\Auth\MemoryCache;
use ShipStream\FedEx\Auth\NullAuthenticator;
use ShipStream\FedEx\Contracts\TokenCache;
use ShipStream\FedEx\Enums\Endpoint;
use ShipStream\FedEx\Enums\GrantType;

class FedEx extends Connector
{
    use AlwaysThrowOnErrors;
    use ClientCredentialsGrant;

    public function __construct(
        public string $clientId,
        public string $clientSecret,
        public Endpoint $endpoint = Endpoint::PROD,
        public ?string $childKey = null,
        public ?string $childSecret = null,
        public ?bool $proprietaryChild = false,
        public ?TokenCache $tokenCache = new MemoryCache(),
    ) {
        if (($this->childKey && ! $this->childSecret) || ($this->childSecret && ! $this->childKey)) {
            throw new InvalidArgumentException('Both childKey and childSecret must be provided.');
        }

        $this->oauthConfig()->setClientId($clientId);
        $this->oauthConfig()->setClientSecret($clientSecret);

        $cacheKey = $this->tokenCacheKey();
        $authenticator = $tokenCache::get($cacheKey);
        if (! $authenticator) {
            $authenticator = $this->getAccessToken();
            $tokenCache::set($cacheKey, $authenticator);
        }

        $this->authenticate($authenticator);
    }

    public function resolveBaseUrl(): string
    {
        return $this->endpoint->value;
    }

    public function addressValidationV1(): AddressValidationV1\Api
    {
        return new AddressValidationV1\Api($this);
    }

    public function authorizationV1(): AuthorizationV1\Api
    {
        $this->authenticate(new NullAuthenticator());

        return new AuthorizationV1\Api($this);
    }

    public function freightLTLV1(): FreightLTLV1\Api
    {
        return new FreightLTLV1\Api($this);
    }

    public function groundEODCloseV1(): GroundEodCloseV1\Api
    {
        return new GroundEODCloseV1\Api($this);
    }

    public function locationsSearchV1(): LocationsSearchV1\Api
    {
        return new LocationsSearchV1\Api($this);
    }

    public function openShipV1(): OpenShipV1\Api
    {
        return new OpenShipV1\Api($this);
    }

    public function pickupRequestV1(): PickupRequestV1\Api
    {
        return new PickupRequestV1\Api($this);
    }

    public function postalCodeValidationV1(): PostalCodeValidationV1\Api
    {
        return new PostalCodeValidationV1\Api($this);
    }

    public function ratesTransitTimesV1(): RatesAndTransitTimesV1\Api
    {
        return new RatesAndTransitTimesV1\Api($this);
    }

    public function shipV1(): ShipV1\Api
    {
        return new ShipV1\Api($this);
    }

    public function trackV1(): TrackV1\Api
    {
        return new TrackV1\Api($this);
    }

    public function tradeDocumentsUploadV1(): TradeDocumentsUploadV1\Api
    {
        return new TradeDocumentsUploadV1\Api($this);
    }

    public function tokenCacheKey(): string
    {
        $childKeyStr = $this->childKey ? '.'.$this->childKey : '';

        return $this->clientId.$childKeyStr;
    }

    protected function resolveAccessTokenRequest(): Request
    {
        $args = [
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret,
            'grantType' => GrantType::CLIENT_CREDENTIALS,
        ];

        if ($this->childKey) {
            $args['grantType'] = $this->proprietaryChild
                ? GrantType::PROPRIETARY_CHILD_CREDENTIALS
                : GrantType::CHILD_CREDENTIALS;
            $args['childKey'] = $this->childKey;
            $args['childSecret'] = $this->childSecret;
        }

        $args['grantType'] = $args['grantType']->value;

        return new ApiAuthorization(new FullSchema(...$args));
    }
}
