<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class BatteryDetail extends Dto
{
    /**
     * @param  ?string  $batteryPackingType  Describe the packing arrangement of the battery or cell with respect to other items within the same package.
     * @param  ?string  $batteryRegulatoryType  This is a regulation specific classification for the battery or the cell.
     * @param  ?string  $batteryMaterialType  Indicate the material composition of the battery or cell.
     */
    public function __construct(
        public ?string $batteryPackingType = null,
        public ?string $batteryRegulatoryType = null,
        public ?string $batteryMaterialType = null,
    ) {}
}
