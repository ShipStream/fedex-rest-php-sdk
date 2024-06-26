<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDetail extends Dto
{
    /**
     * @param  ?LocationDetailGeoPositionalCoordinates  $geoPositionalCoordinates  the ISO6709GeographicCoordinates for a specific geographic location
     */
    public function __construct(
        public readonly ?LocationDetailGeoPositionalCoordinates $geoPositionalCoordinates = null,
    ) {
    }
}
