<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Saloon\Http\Auth\AccessTokenAuthenticator;
use ShipStream\FedEx\Auth\MemoryCache;

final class MemoryCacheTest extends TestCase
{
    private ?MemoryCache $cache;

    public function setUp(): void
    {
        $this->cache = new MemoryCache();
    }

    public function testReturnsFalseIfKeyIsMissing(): void
    {
        $missing = $this->cache->get('foo');

        $this->assertFalse($missing);
    }

    public function testReturnsFalseIfAuthenticatorIsExpired(): void
    {
        $authenticator = new AccessTokenAuthenticator(
            accessToken: 'asdf',
            expiresAt: new DateTimeImmutable('-100 seconds')
        );

        $this->cache->set('dummyClientId', $authenticator);
        $retrieved = $this->cache->get('dummyClientId');

        $this->assertFalse($retrieved);
    }

    public function testSetsAndGetsValidAuthenticator(): void
    {
        $authenticator = new AccessTokenAuthenticator(
            accessToken: 'asdf',
            expiresAt: new DateTimeImmutable('+100 seconds')
        );

        $this->cache->set('dummyClientId', $authenticator);
        $retrieved = $this->cache->get('dummyClientId');

        $this->assertEquals($authenticator, $retrieved);
    }
}
