<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class BatteryDetail extends Dto
{
    /**
     * @param  ?string  $batteryPackingType  Describe the packing arrangement of the battery or cell with respect to other items within the same package.
     * @param  ?string  $batteryRegulatoryType  This is a regulation specific classification for the battery or the cell.
     * @param  ?string  $batteryMaterialType  Indicate the material composition of the battery or cell.
     */
    public function __construct(
        public readonly ?string $batteryPackingType = null,
        public readonly ?string $batteryRegulatoryType = null,
        public readonly ?string $batteryMaterialType = null,
    ) {
    }
}
