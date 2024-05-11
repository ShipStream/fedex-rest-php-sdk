<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CurrencyExchangeRate extends Dto
{
    /**
     * @param  ?float  $rate  Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6
     * @param  ?string  $fromCurrency  The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     * @param  ?string  $intoCurrency  The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see currencycodes</a>
     */
    public function __construct(
        public readonly ?float $rate = null,
        public readonly ?string $fromCurrency = null,
        public readonly ?string $intoCurrency = null,
    ) {
    }
}
