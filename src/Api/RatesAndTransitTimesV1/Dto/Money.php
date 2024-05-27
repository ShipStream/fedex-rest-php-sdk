<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Money extends Dto
{
    /**
     * @param  ?float  $amount  Indicate the amount.
     * @param  ?string  $currency  Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $currency = null,
    ) {
    }
}
