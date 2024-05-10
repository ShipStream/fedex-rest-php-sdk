<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class AddressAncillaryDetail extends Dto
{
    /**
     * @param  ?string  $locationInCity  This is the Subdivision or community within a city for the given address.<br> Forester subdivision
     * @param  ?string  $suite  This is the suite information for the given address.
     * @param  ?string  $addressVerificationOverrideReason  Specifies the reason to override address verification.<br> Valid values:  CUSTOMER_PREFERENCE, CUSTOMER_PROVIDED_PROOF, MANUAL_VALIDATION
     * @param  ?string  $locationInProperty  This is location in a campus, such as exterior building annex A.<br> Example: south west of main office entrance.
     * @param  ?string  $addtionalDescriptions  Specifies any additional information about the given address.<br>Example: north door
     * @param  ?string  $department  This is the department for the given address.<br>Example: Claims department
     * @param  ?string  $roomFloor  This is to specify the room or floor information for the given address.<br>Example: 5th floor
     * @param  ?string  $crossStreet  This is the cross street information for the given address.<br>Example: Union and Main
     * @param  ?string  $building  This is the building information for the given address.<br>Example: Building 300
     * @param  ?string  $apartment  This is the apartment information for the given address.<br>Example: Apartment 1503
     * @param  ?string  $room  This is room specific information for the given address.<br>Example: Room B-23
     */
    public function __construct(
        public readonly ?string $locationInCity = null,
        public readonly ?string $suite = null,
        public readonly ?string $addressVerificationOverrideReason = null,
        public readonly ?string $locationInProperty = null,
        public readonly ?string $addtionalDescriptions = null,
        public readonly ?string $department = null,
        public readonly ?string $roomFloor = null,
        public readonly ?string $crossStreet = null,
        public readonly ?string $building = null,
        public readonly ?string $apartment = null,
        public readonly ?string $room = null,
    ) {
    }
}
