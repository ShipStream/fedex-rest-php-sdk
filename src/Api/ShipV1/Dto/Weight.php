<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight extends Dto
{
    /**
     * @param  string  $units  Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     * @param  float  $value  Weight Value.<br> Example: 68.25<br>
     */
    public function __construct(
        public readonly string $units,
        public readonly float $value,
    ) {
    }
}
