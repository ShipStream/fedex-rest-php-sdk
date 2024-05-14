<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Volume extends Dto
{
    /**
     * @param  ?string  $units  Specifies the unit in Cubic Feet or Cubic Meters.
     * @param  ?float  $value  The amount of volume <br> Example: 9.965781217890562
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
