<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class Money extends Dto
{
    /**
     * @param  ?float  $amount  This is the amount.<br>Example: 12.45
     * @param  ?string  $currency  This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $currency = null,
    ) {
    }
}
