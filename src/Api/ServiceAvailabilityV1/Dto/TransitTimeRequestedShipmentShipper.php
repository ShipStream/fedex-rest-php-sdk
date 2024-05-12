<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipper extends Dto
{
    /**
     * @param  TransitTimeShipper  $address  Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     */
    public function __construct(
        public readonly TransitTimeShipper $address,
    ) {
    }
}
