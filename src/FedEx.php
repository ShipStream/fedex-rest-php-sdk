<?php

declare(strict_types=1);

namespace ShipStream\FedEx;

use InvalidArgumentException;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use ShipStream\FedEx\Api\AddressValidationV1\AddressValidationV1;
use ShipStream\FedEx\Api\AuthorizationV1\AuthorizationV1;
use ShipStream\FedEx\Api\AuthorizationV1\Dto\FullSchema;
use ShipStream\FedEx\Api\AuthorizationV1\Requests\ApiAuthorization;
use ShipStream\FedEx\Api\FreightLTLV1\FreightLTLV1;
use ShipStream\FedEx\Api\GroundEODCloseV1\GroundEodCloseV1;
use ShipStream\FedEx\Api\LocationsSearchV1\LocationsSearchV1;
use ShipStream\FedEx\Api\OpenShipV1\OpenShipV1;
use ShipStream\FedEx\Api\PickupRequestV1\PickupRequestV1;
use ShipStream\FedEx\Api\PostalCodeValidationV1\PostalCodeValidationV1;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1\RatesAndTransitTimesV1;
use ShipStream\FedEx\Api\ShipV1\ShipV1;
use ShipStream\FedEx\Api\TrackV1\TrackV1;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\TradeDocumentsUploadV1;
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
    ) {
        if (($this->childKey && ! $this->childSecret) || ($this->childSecret && ! $this->childKey)) {
            throw new InvalidArgumentException('Both childKey and childSecret must be provided.');
        }

        $this->oauthConfig()->setClientId($clientId);
        $this->oauthConfig()->setClientSecret($clientSecret);

        $authenticator = $this->getAccessToken();
        $this->authenticate($authenticator);
    }

    public function resolveBaseUrl(): string
    {
        return $this->endpoint->value;
    }

    {
    public function addressValidationV1(): AddressValidationV1
    {
        return new AddressValidationV1($this);
    }

    public function authorizationV1(): AuthorizationV1
    {
        return new AuthorizationV1($this);
    }

    public function freightLTLV1(): FreightLTLV1
    {
        return new FreightLTLV1($this);
    }

    public function groundEODCloseV1(): GroundEodCloseV1
    {
        return new GroundEODCloseV1($this);
    }

    public function locationsSearchV1(): LocationsSearchV1
    {
        return new LocationsSearchV1($this);
    }

    public function openShipV1(): OpenShipV1
    {
        return new OpenShipV1($this);
    }

    public function pickupRequestV1(): PickupRequestV1
    {
        return new PickupRequestV1($this);
    }

    public function postalCodeValidationV1(): PostalCodeValidationV1
    {
        return new PostalCodeValidationV1($this);
    }

    public function ratesTransitTimesV1(): RatesAndTransitTimesV1
    {
        return new RatesAndTransitTimesV1($this);
    }

    public function shipV1(): ShipV1
    {
        return new ShipV1($this);
    }

    public function trackV1(): TrackV1
    {
        return new TrackV1($this);
    }

    public function tradeDocumentsUploadV1(): TradeDocumentsUploadV1
    {
        return new TradeDocumentsUploadV1($this);
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
