<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceDetail extends Dto
{
    /**
     * @param  ?Weight  $totalWeight  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?int  $packageCount  Indicates the total number of packages in the shipment that contain dry ice.<br>Example: 12
     */
    public function __construct(
        public readonly ?Weight $totalWeight = null,
        public readonly ?int $packageCount = null,
    ) {
    }
}
