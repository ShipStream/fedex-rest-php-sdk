<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Auth;

use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

/**
 * This authenticator doesn't do anything, which is sometimes useful!
 */
class NullAuthenticator implements Authenticator
{
    public function set(PendingRequest $pendingRequest): void
    {
    }
}
