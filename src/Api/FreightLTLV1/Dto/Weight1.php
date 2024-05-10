<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight1 extends Dto
{
    /**
     * @param  ?string  $units  Specifies the package weight unit. For Dry Ice the unit of measure is KG.
     * @param  ?float  $value  Weight Value. Maximum Length is 99999. <br> Example: 10.0
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
