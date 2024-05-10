<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceDetailTotalWeight extends Dto
{
    /**
     * @param  string  $units  Identifies the unit of measure associated with a weight value. <br> Example: LB
     * @param  float  $value  Identifies the weight <br> Example: 10.0
     */
    public function __construct(
        public readonly string $units,
        public readonly float $value,
    ) {
    }
}
