<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Contracts;

interface TokenLock
{
    /**
     * Lock and block when access token generation is ongoing
     */
    public function lock(string $key): void;

    /**
     * Unlock when access token generation completes or fails
     */
    public function unlock(string $key): void;
}