<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class CurrencyExchangeRate extends Dto
{
    /**
     * @param  ?string  $fromCurrency  The currency code for the original (converted FROM) currency.
     * @param  ?string  $intoCurrency  The currency code for the final (converted INTO) currency.
     * @param  ?float  $rate  Multiplier used to convert fromCurrency units to intoCurrency units.
     */
    public function __construct(
        public readonly ?string $fromCurrency = null,
        public readonly ?string $intoCurrency = null,
        public readonly ?float $rate = null,
    ) {
    }
}
