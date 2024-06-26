<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAndAddress extends Dto
{
    /**
     * @param  ?Contact  $contact  Indicate the contact details for this shipment.
     * @param  ?ContactAncillaryDetail  $contactAncillaryDetail  Indicate additional contact details such as email and phone information.
     * @param  ?Address  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     * @param  ?AddressAncillaryDetail  $addressAncillaryDetail  specifies additional address details for the physical location
     */
    public function __construct(
        public readonly ?Contact $contact = null,
        public readonly ?ContactAncillaryDetail $contactAncillaryDetail = null,
        public readonly ?Address $address = null,
        public readonly ?AddressAncillaryDetail $addressAncillaryDetail = null,
    ) {
    }
}
