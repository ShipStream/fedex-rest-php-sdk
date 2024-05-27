<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAndAddress extends Dto
{
    /**
     * @param  ?Contact  $contact  Indicate the contact details of the shipper.
     * @param  ?Address  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     */
    public function __construct(
        public readonly ?Contact $contact = null,
        public readonly ?Address $address = null,
    ) {
    }
}
