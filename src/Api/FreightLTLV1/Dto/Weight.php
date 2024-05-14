<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight extends Dto
{
    /**
     * @param  string  $units  Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     * @param  float  $value  Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>
     */
    public function __construct(
        public readonly string $units,
        public readonly float $value,
    ) {
    }
}
