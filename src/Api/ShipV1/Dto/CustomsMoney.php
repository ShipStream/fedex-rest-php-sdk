<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomsMoney extends Dto
{
    /**
     * @param  ?float  $amount  This is the amount. Maximum limit is 5 digits before decimal.<br>Example:  1556.25
     * @param  ?string  $currency  This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency codes</a>
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $currency = null,
    ) {
    }
}
