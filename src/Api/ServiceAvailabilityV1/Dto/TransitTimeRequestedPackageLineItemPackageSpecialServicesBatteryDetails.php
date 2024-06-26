<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItemPackageSpecialServicesBatteryDetails extends Dto
{
    /**
     * @param  ?string  $batteryMaterialType  Describes the material composition of the battery or cell.
     * @param  ?string  $batteryPackingType  Describes the packing arrangement of the battery or cell with respect to other items within the same package.
     * @param  ?string  $batteryRegulatoryType  A regulation specific classification for the battery or cell.
     */
    public function __construct(
        public readonly ?string $batteryMaterialType = null,
        public readonly ?string $batteryPackingType = null,
        public readonly ?string $batteryRegulatoryType = null,
    ) {
    }
}
