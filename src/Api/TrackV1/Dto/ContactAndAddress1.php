<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAndAddress1 extends Dto
{
    /**
     * @param  ?ContactVo1  $contact  Indicate the contact details for this package.<br>Note: contact is shown in response only in secured flow. For non secured flow, contact is not shown in the response.'
     * @param  ?AddressVo1  $address  Address where the package was actually delivered. Contrast with destinationAddress, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a behavior, hold at FedEx location, etc.
     */
    public function __construct(
        public readonly ?ContactVo1 $contact = null,
        public readonly ?AddressVo1 $address = null,
    ) {
    }
}
