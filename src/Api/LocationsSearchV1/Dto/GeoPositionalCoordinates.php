<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class GeoPositionalCoordinates extends Dto
{
    /**
     * @param  ?float  $latitude  The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
     * @param  ?float  $longitude  The geo coordinate value that specifies the East-West position of the address.<br>Example: 115.1398° W
     */
    public function __construct(
        public readonly ?float $latitude = null,
        public readonly ?float $longitude = null,
    ) {
    }
}
