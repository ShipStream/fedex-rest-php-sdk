<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Saloon\Exceptions\Request\Statuses\UnauthorizedException;
use Saloon\Http\Auth\AccessTokenAuthenticator;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\PendingRequest;
use ShipStream\FedEx\Api\AuthorizationV1\Requests\ApiAuthorization;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Dto\FullSchemaValidatePostal;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Requests\ValidatePostal;
use ShipStream\FedEx\Auth\MemoryCache;
use ShipStream\FedEx\Enums\Endpoint;
use ShipStream\FedEx\FedEx;

class FedExConnectorTest extends TestCase
{
    private ?string $clientId;

    private ?string $clientSecret;

    public function setUp(): void
    {
        $this->clientId = $_ENV['CLIENT_ID'] ?? null;
        $this->clientSecret = $_ENV['CLIENT_SECRET'] ?? null;
    }

    public function testThrowsExceptionIfOnlyOneChildCredentialIsPassed(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new FedEx(
            clientId: 'dummyId',
            clientSecret: 'dummySecret',
            childKey: 'dummyChildKey',
        );

        $this->expectException(InvalidArgumentException::class);
        new FedEx(
            clientId: 'dummyId',
            clientSecret: 'dummySecret',
            childSecret: 'dummyChildSecret',
        );
    }

    public function testThrowsUnauthorizedExceptionIfCredentialsAreInvalid(): void
    {
        $this->expectException(UnauthorizedException::class);

        $connector = new FedEx(
            clientId: 'invalidId',
            clientSecret: 'invalidSecret',
            endpoint: Endpoint::SANDBOX,
        );

        $connector->getAccessToken();
    }

    public function testFetchesNewAccessToken(): void
    {
        $connector = new FedEx(
            clientId: $this->clientId,
            clientSecret: $this->clientSecret,
            endpoint: Endpoint::SANDBOX,
        );

        $authenticator = $connector->getAuthenticator();

        $this->assertInstanceOf(AccessTokenAuthenticator::class, $authenticator);
        $this->assertGreaterThan(new DateTimeImmutable(), $authenticator->expiresAt);
    }

    public function testFetchesAccessTokenFromCache(): void
    {
        $connector = new FedEx(
            clientId: $this->clientId,
            clientSecret: $this->clientSecret,
            endpoint: Endpoint::SANDBOX,
        );

        $firstAccessToken = $connector->getAuthenticator()->accessToken;

        unset($connector);
        $connector = new FedEx(
            clientId: $this->clientId,
            clientSecret: $this->clientSecret,
            endpoint: Endpoint::SANDBOX,
        );

        $secondAccessToken = $connector->getAuthenticator()->accessToken;

        $this->assertEquals($firstAccessToken, $secondAccessToken);
    }

    public function testFetchesNewAccessTokenIfCacheExpired(): void
    {
        $connector = new FedEx(
            clientId: $this->clientId,
            clientSecret: $this->clientSecret,
            endpoint: Endpoint::SANDBOX,
        );

        $accessToken = $connector->getAuthenticator()->accessToken;
        $expiredAuthenticator = new AccessTokenAuthenticator($accessToken, expiresAt: new DateTimeImmutable('-10 seconds'));
        MemoryCache::set($connector->tokenCacheKey(), $expiredAuthenticator);

        $newAccessToken = $connector->getAuthenticator()->accessToken;

        $this->assertNotEquals($accessToken, $newAccessToken);
    }

    public function testGeneratesTransactionIds(): void
    {
        $mockClient = new MockClient([
            ApiAuthorization::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
            ]),
            ValidatePostal::class => MockResponse::make(),
        ]);
        $connector = new FedEx(
            clientId: $this->clientId,
            clientSecret: $this->clientSecret,
            endpoint: Endpoint::SANDBOX,
            transactionIdGenerator: fn (PendingRequest $pendingRequest) => 'abcd1234',
        );
        $connector->withMockClient($mockClient);

        $api = $connector->postalCodeValidationV1();
        $api->validatePostal(new FullSchemaValidatePostal(
            carrierCode: 'FDXG',
            countryCode: 'US',
            stateOrProvinceCode: 'NY',
            postalCode: '10001',
            shipDate: '2024-08-10',
        ));

        $lastRequest = $mockClient->getLastPendingRequest();

        $this->assertArrayHasKey('x-customer-transaction-id', $lastRequest->headers()->all());
        $this->assertSame('abcd1234', $lastRequest->headers()->get('x-customer-transaction-id'));
    }
}
