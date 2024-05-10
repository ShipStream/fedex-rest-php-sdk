<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class GeoPositionalCoordinates extends Dto
{
    /**
     * @param  ?float  $latitude  Specifies the latitude.
     * @param  ?float  $longitude  Specifies the longitude.
     */
    public function __construct(
        public readonly ?float $latitude = null,
        public readonly ?float $longitude = null,
    ) {
    }
}
