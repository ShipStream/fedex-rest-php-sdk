<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Auth;

use DateTimeImmutable;
use Saloon\Http\Auth\AccessTokenAuthenticator;
use Throwable;

/**
 * Drop-in replacement for the AccessTokenAuthenticator::serialize()/unserialize()
 * methods that were removed in Saloon v4.
 */
final class TokenSerializer
{
    public static function serialize(AccessTokenAuthenticator $authenticator): string
    {
        return serialize($authenticator);
    }

    public static function unserialize(string $data): ?AccessTokenAuthenticator
    {
        try {
            $token = @unserialize($data, [
                'allowed_classes' => [
                    AccessTokenAuthenticator::class,
                    DateTimeImmutable::class,
                ],
            ]);
        } catch (Throwable) {
            return null;
        }

        return $token instanceof AccessTokenAuthenticator ? $token : null;
    }
}
