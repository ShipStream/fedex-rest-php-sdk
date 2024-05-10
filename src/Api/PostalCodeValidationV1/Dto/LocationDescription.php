<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PostalCodeValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDescription extends Dto
{
    /**
     * @param  string  $locationId  Location id of the postal code provided. <br> Example: MAAPD
     * @param  string  $locationNumber  Location number of the postal code provided. <br> Example: 6955
     * @param  string  $serviceArea  Service area of the postal code provided. <br> Example: AA
     * @param  string  $airportId  Airport Id of the postal code provided. <br> Example: BLR
     */
    public function __construct(
        public readonly string $locationId,
        public readonly string $locationNumber,
        public readonly string $serviceArea,
        public readonly string $airportId,
    ) {
    }
}
