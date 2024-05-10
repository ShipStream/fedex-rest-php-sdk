<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount extends Dto
{
    /**
     * @param  ?float  $amount  Indicates the details of the charges are to be added to the COD collect amount.
     * @param  ?string  $currency  Three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $currency = null,
    ) {
    }
}
