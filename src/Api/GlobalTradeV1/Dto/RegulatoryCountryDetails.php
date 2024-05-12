<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryCountryDetails extends Dto
{
    /**
     * @param  string  $countryCode  Indicates Country Code.
     * @param  string  $category  Indicates the Regulatory details category.
     */
    public function __construct(
        public readonly RegulatoryShipmentDetail $shipmentDetails,
        public readonly string $countryCode,
        public readonly string $category,
    ) {
    }
}
