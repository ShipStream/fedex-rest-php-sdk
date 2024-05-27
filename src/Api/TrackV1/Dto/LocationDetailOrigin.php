<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDetailOrigin extends Dto
{
    /**
     * @param  ?string  $locationId  Location Identification for facilities identified by an alpha numeric location code. Passing Location Id of the Hold at Location (HAL) address is strongly recommended to ensure packages are delivered to the correct address.<br> Example: SEA
     * @param  ?ContactAndAddress  $locationContactAndAddress  Location Contact And Address.
     */
    public function __construct(
        public readonly ?string $locationId = null,
        public readonly ?ContactAndAddress $locationContactAndAddress = null,
    ) {
    }
}
