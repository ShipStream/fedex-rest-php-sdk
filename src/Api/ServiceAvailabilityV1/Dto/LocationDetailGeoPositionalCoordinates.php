<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDetailGeoPositionalCoordinates extends Dto
{
    /**
     * @param  ?float  $latitude  Field holds the latitude value
     * @param  ?float  $longitude  Field holds the longitude value
     */
    public function __construct(
        public readonly ?float $latitude = null,
        public readonly ?float $longitude = null,
    ) {
    }
}
