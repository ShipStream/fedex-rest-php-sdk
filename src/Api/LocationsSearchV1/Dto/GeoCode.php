<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class GeoCode extends Dto
{
    /**
     * @param  ?string  $latitude  The geo coordinate value that specifies the north-south position of the address.<br>Example: 36.1699° N
     * @param  ?string  $longitude  The geo coordinate value that specifies the East-West position of the address.<br>Example:115.1398° W
     */
    public function __construct(
        public readonly ?string $latitude = null,
        public readonly ?string $longitude = null,
    ) {
    }
}
