<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Saloon\Http\Auth\AccessTokenAuthenticator;
use ShipStream\FedEx\Auth\TokenSerializer;

final class TokenSerializerTest extends TestCase
{
    public function testRoundTripsAnAuthenticator(): void
    {
        $authenticator = new AccessTokenAuthenticator(
            accessToken: 'access-123',
            refreshToken: 'refresh-456',
            expiresAt: new DateTimeImmutable('+1 hour'),
        );

        $serialized = TokenSerializer::serialize($authenticator);
        $restored = TokenSerializer::unserialize($serialized);

        $this->assertEquals($authenticator, $restored);
    }

    public function testRoundTripsAnAuthenticatorWithNullRefreshAndExpiry(): void
    {
        $authenticator = new AccessTokenAuthenticator(accessToken: 'access-123');

        $serialized = TokenSerializer::serialize($authenticator);
        $restored = TokenSerializer::unserialize($serialized);

        $this->assertEquals($authenticator, $restored);
    }

    public function testReturnsNullForGarbageInput(): void
    {
        $this->assertNull(TokenSerializer::unserialize('not-a-serialized-string'));
        $this->assertNull(TokenSerializer::unserialize(''));
    }

    public function testReturnsNullForNonAuthenticatorObject(): void
    {
        $serialized = serialize(new DateTimeImmutable);

        $this->assertNull(TokenSerializer::unserialize($serialized));
    }
}
