<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class AncillaryFeesAndTaxes extends Dto
{
    /**
     * @param  ?float  $amount  Specifies the list of ancillary fees And Taxes
     * @param  ?string  $description  Identifies the amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     * @param  ?string  $type  Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
