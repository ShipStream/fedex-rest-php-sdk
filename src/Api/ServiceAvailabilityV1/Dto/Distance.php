<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class Distance extends Dto
{
    /**
     * @param  ?string  $units  Indicates the unit of measure for the distance value.
     * @param  ?float  $value  Indicates the distance quantity.
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
