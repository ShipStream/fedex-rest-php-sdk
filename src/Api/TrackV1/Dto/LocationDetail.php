<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDetail extends Dto
{
    /**
     * @param  ContactAndAddress  $locationContactAndAddress  Location Contact And Address.
     * @param  string  $locationType  This field holds FedEx Location Type. If  Location Type not available we will get empty value.
     * @param  ?string  $locationId  Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
     */
    public function __construct(
        public readonly ContactAndAddress $locationContactAndAddress,
        public readonly string $locationType,
        public readonly ?string $locationId = null,
    ) {
    }
}
