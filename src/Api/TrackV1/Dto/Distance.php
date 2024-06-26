<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class Distance extends Dto
{
    /**
     * @param  ?string  $units  Field which holds the distance unit type.
     * @param  ?float  $value  Field which holds the value for the distance.<br> Example: 685.78
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
