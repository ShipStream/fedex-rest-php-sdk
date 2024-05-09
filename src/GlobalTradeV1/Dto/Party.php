<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class Party extends Dto
{
    /**
     * @param  ?string  $accountNumber  This is FedEx Account number details. Example: 123456789
     */
    public function __construct(
        public readonly ?string $accountNumber = null,
    ) {
    }
}
