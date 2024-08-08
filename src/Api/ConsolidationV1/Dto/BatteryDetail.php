<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class BatteryDetail extends Dto
{
    /**
     * @param  ?string  $batteryPackingType  describes the packing arrangement of the battery or cell with respect to other
     *                                       items within the same package
     * @param  ?string  $batteryRegulatoryType  A regulation specific classification for the battery or cell
     * @param  ?string  $batteryMaterialType  describes the material composition of the battery or cell.
     */
    public function __construct(
        public readonly ?string $batteryPackingType = null,
        public readonly ?string $batteryRegulatoryType = null,
        public readonly ?string $batteryMaterialType = null,
    ) {
    }
}
