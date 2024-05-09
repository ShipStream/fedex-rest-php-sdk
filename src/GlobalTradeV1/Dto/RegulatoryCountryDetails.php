<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryCountryDetails extends Dto
{
    /**
     * @param  mixed[]  $shipmentDetails  These are Shipment Details.
     * @param  string  $countryCode  Indicates Country Code.
     * @param  string  $category  Indicates the Regulatory details category.
     */
    public function __construct(
        public readonly array $shipmentDetails,
        public readonly string $countryCode,
        public readonly string $category,
    ) {
    }
}
