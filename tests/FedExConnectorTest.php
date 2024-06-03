<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Saloon\Exceptions\Request\Statuses\UnauthorizedException;
use Saloon\Http\Auth\AccessTokenAuthenticator;
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

        new FedEx(
            clientId: 'invalidId',
            clientSecret: 'invalidSecret',
            endpoint: Endpoint::SANDBOX,
        );
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

        $connector = new FedEx(
            clientId: $this->clientId,
            clientSecret: $this->clientSecret,
            endpoint: Endpoint::SANDBOX,
        );

        $newAccessToken = $connector->getAuthenticator()->accessToken;

        $this->assertNotEquals($accessToken, $newAccessToken);
    }
}
