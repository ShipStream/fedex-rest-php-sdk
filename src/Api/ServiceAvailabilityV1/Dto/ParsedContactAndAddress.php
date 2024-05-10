<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ParsedContactAndAddress extends Dto
{
    /**
     * @param  ?Address  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     * @param  ?Contact  $contact  Indicate the contact details for this shipment.
     */
    public function __construct(
        public readonly ?Address $address = null,
        public readonly ?Contact $contact = null,
    ) {
    }
}
