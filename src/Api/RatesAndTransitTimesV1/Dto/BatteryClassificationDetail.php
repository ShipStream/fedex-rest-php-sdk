<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class BatteryClassificationDetail extends Dto
{
    /**
     * @param  ?string  $material  Specify the material composition of the battery or cell.
     * @param  ?string  $regulatorySubType  Specify the regulation specific classification for the battery or cell.
     * @param  ?string  $packing  Indicate the packing arrangement of the battery or cell with respect to other items within the same package.
     */
    public function __construct(
        public readonly ?string $material = null,
        public readonly ?string $regulatorySubType = null,
        public readonly ?string $packing = null,
    ) {
    }
}
