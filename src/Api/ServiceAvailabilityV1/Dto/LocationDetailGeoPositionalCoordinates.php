<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

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
        public ?float $latitude = null,
        public ?float $longitude = null,
    ) {}
}
