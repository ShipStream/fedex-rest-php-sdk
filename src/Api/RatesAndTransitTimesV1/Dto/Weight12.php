<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight12 extends Dto
{
    /**
     * @param  ?string  $units  Specifies the package weight unit. For Dry Ice the unit of measure is KG.
     * @param  ?float  $value  Specifies the package weight.<br> Example: 68.25
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
