<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Contracts;

use Saloon\Http\Auth\AccessTokenAuthenticator;

interface TokenCache
{
    /**
     * Get an authenticator (with its token) from the cache. Return false if the key is missing or expired.
     */
    public static function get(string $key): AccessTokenAuthenticator|false;

    /**
     * Set a value in the cache.
     */
    public static function set(string $key, AccessTokenAuthenticator $authenticator): void;
}
