<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class JustContactAndAddress extends Dto
{
    /**
     * @param  ?Address2  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?Contact2  $contact  Specify the contact information.
     */
    public function __construct(
        public readonly ?Address2 $address = null,
        public readonly ?Contact2 $contact = null,
    ) {
    }
}
