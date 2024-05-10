<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipmentSpecialServicesShipmentDryIceDetailTotalWeight extends Dto
{
    /**
     * @param  ?string  $units  Specify the unit of measurement used to  weigh the package. For Dry Ice the unit of measure is KG.
     * @param  ?float  $value  Specify the value of the weight of the package.<br> Example: 68.25
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
