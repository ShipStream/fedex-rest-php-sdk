<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Auth;

use Saloon\Http\Auth\AccessTokenAuthenticator;
use ShipStream\FedEx\Contracts\TokenCache;

class MemoryCache implements TokenCache
{
    /**
     * @var array<AccessTokenAuthenticator>
     */
    public static array $authenticators = [];

    public static function get(string $key): AccessTokenAuthenticator|false
    {
        $authenticator = self::$authenticators[$key] ?? null;
        if (! $authenticator || $authenticator->hasExpired()) {
            return false;
        }

        return $authenticator;
    }

    public static function set(string $key, AccessTokenAuthenticator $auth): void
    {
        self::$authenticators[$key] = $auth;
    }
}
