<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceDetail1 extends Dto
{
    /**
     * @param  ?Weight1  $totalWeight  These are the package weight details.
     * @param  ?int  $packageCount  Indicates the total number of packages in the shipment that contain dry ice.<br>Example: 12
     */
    public function __construct(
        public readonly ?Weight1 $totalWeight = null,
        public readonly ?int $packageCount = null,
    ) {
    }
}
