<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAndAddress1 extends Dto
{
    /**
     * @param  ?ContactVo1  $contact  Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     * @param  ?mixed[]  $address  Required.
     *
     * Descriptive data for a physical location.  may be used as an actual physical address(place to which one could go), or a container of 'address parts' which should be handled as a unit(such as a city-state-zip combination within the US).
     *
     * Conditional when used with Payor object.  Required if entering using RECIPIENT or THIRD_PARTY.  Required if not-authenticated and SENDER is selected
     */
    public function __construct(
        public readonly ?ContactVo1 $contact = null,
        public readonly ?array $address = null,
    ) {
    }
}
