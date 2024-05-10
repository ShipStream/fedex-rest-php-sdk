<?php

declare(strict_types=1);

namespace FedEx;

use App\Enums\GrantType;
use InvalidArgumentException;
use Saloon\Contracts\Authenticator;
use Saloon\Helpers\OAuth2\OAuthConfig;
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
use ShipStream\FedEx\Api\PickupRequestV1\PickupRequestV1;
use ShipStream\FedEx\Api\PostalCodeValidationV1\PostalCodeValidationV1;
use ShipStream\FedEx\Api\TrackV1\TrackV1;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\TradeDocumentsUploadV1;
use ShipStream\FedEx\Enums\Endpoint;

class FedEx extends Connector
{
    use AlwaysThrowOnErrors;
    use ClientCredentialsGrant;

    public function __construct(
        public string $apiKey,
        public string $secretKey,
        public Endpoint $endpoint = Endpoint::PROD,
        public ?string $childKey = null,
        public ?string $childSecret = null,
        public ?bool $proprietaryChild = false,
    ) {
        if (($this->childKey && ! $this->childSecret) || ($this->childSecret && ! $this->childKey)) {
            throw new InvalidArgumentException('Both childKey and childSecret must be provided.');
        }
    }

    public function resolveBaseUrl(): string
    {
        return $this->endpoint->value;
    }

    public function defaultAuth(): Authenticator
    {
        return $this->getAccessToken();
    }

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

    public function pickupRequestV1(): PickupRequestV1
    {
        return new PickupRequestV1($this);
    }

    public function postalCodeValidationV1(): PostalCodeValidationV1
    {
        return new PostalCodeValidationV1($this);
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
            'clientId' => $this->apiKey,
            'clientSecret' => $this->secretKey,
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

    // protected function defaultOauthConfig(): OAuthConfig
    // {
    //     return OAuthConfig::make()
    //         ->setClientId($this->apiKey)
    //         ->setClientSecret($this->secretKey)
    //         // This is hardcoded, but is the same as the result of calling
    //         // AuthorizationV1\Requests\ApiAuthorization::resolveEndpoint()
    //         ->setTokenEndpoint('/oauth/token')
    //         ->setRequestModifier(function (Request $request) {
    //             $request->body()->add('grant_type', 'client_credentials');
    //             $request->headers()->add('Content-Type', 'application/x-www-form-urlencoded');
    //             if ($this->childKey) {
    //                 $existingBody = $request->toArray();
    //                 $request->body($existingBody.'&grant_type=client_credentials');
    //             }
    //         });
    // }
}
