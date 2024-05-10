<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddressContactParsedPersonName extends Dto
{
    /**
     * @param  ?string  $firstName  Specify the First Name. Maximum Length is 35. <br> Example: John
     * @param  ?string  $lastName  Specify the Last Name. Maximum Length is 35. <br> Example: Mayor
     * @param  ?string  $middleName  Specify the Middle Name.<br> Example: Redmond
     * @param  ?string  $suffix  Specify the Suffix.<br> Example: Jr
     */
    public function __construct(
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $middleName = null,
        public readonly ?string $suffix = null,
    ) {
    }
}
