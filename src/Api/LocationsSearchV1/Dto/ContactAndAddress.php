<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAndAddress extends Dto
{
    /**
     * @param  ?Address  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?Contact  $contact  Indicates the contact details such as Name, Email, PhoneNumber
     * @param  ?AddressAncillaryDetail  $addressAncillaryDetail  Indicate the additional address details for the physical location .
     */
    public function __construct(
        public readonly ?Address $address = null,
        public readonly ?Contact $contact = null,
        public readonly ?AddressAncillaryDetail $addressAncillaryDetail = null,
    ) {
    }
}
