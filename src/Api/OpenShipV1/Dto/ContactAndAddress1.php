<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAndAddress1 extends Dto
{
    /**
     * @param  ?Contact2  $contact  Indicate the contact details of the shipper.
     * @param  ?Address1  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     */
    public function __construct(
        public readonly ?Contact2 $contact = null,
        public readonly ?Address1 $address = null,
    ) {
    }
}
