<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail extends Dto
{
    /**
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight  $totalWeight  These are the weight details.
     * @param  ?int  $packageCount  Specify dry ice shipment package count.<br>Example: 12
     */
    public function __construct(
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight $totalWeight = null,
        public readonly ?int $packageCount = null,
    ) {
    }
}
