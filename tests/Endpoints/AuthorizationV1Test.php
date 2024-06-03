<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ShipStream\FedEx\Api\AuthorizationV1;
use ShipStream\FedEx\Api\AuthorizationV1\Dto\FullSchema;
use ShipStream\FedEx\Enums\Endpoint;
use ShipStream\FedEx\Enums\GrantType;
use ShipStream\FedEx\FedEx;

class AuthorizationV1Test extends TestCase
{
    private ?AuthorizationV1\Api $api;

    public function setUp(): void
    {
        $this->api = (new FedEx(
            clientId: $_ENV['CLIENT_ID'],
            clientSecret: $_ENV['CLIENT_SECRET'],
            endpoint: Endpoint::SANDBOX,
        ))->authorizationV1();
    }

    public function testAuthorizationEndpointSendsTheCorrectBody(): void
    {
        $body = new FullSchema(
            grantType: GrantType::CLIENT_CREDENTIALS->value,
            clientId: $_ENV['CLIENT_ID'],
            clientSecret: $_ENV['CLIENT_SECRET']
        );

        $response = $this->api->apiAuthorization($body);
        $dto = $response->dto();

        $this->assertInstanceOf(AuthorizationV1\Responses\Response::class, $dto);
    }
}
