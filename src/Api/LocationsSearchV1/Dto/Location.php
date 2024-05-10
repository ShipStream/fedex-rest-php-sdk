<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class Location extends Dto
{
    /**
     * @param  Address  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?GeoCode  $longLat  The ISO6709 geographic coordinates for a specific geographic location, specifically latitude and longitude.
     */
    public function __construct(
        public readonly Address $address,
        public readonly ?GeoCode $longLat = null,
    ) {
    }
}
