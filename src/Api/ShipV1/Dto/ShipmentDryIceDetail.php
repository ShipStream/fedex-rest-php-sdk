<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceDetail extends Dto
{
    /**
     * @param  ?Weight  $totalWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?int  $packageCount  Indicates the total number of packages in the shipment that contain dry ice.<br>Example: 12
     */
    public function __construct(
        public readonly ?Weight $totalWeight = null,
        public readonly ?int $packageCount = null,
    ) {
    }
}
