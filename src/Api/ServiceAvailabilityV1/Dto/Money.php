<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class Money extends Dto
{
    /**
     * @param  ?float  $amount  This is the amount. Max length 18 including decimal.<br>Example: 12.45
     * @param  ?string  $currency  This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $currency = null,
    ) {
    }
}
