<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CleansedAddressandLocationDetail extends Dto
{
    /**
     * @param  ?string  $serviceArea  This is the FedEx recognized service area code.
     * @param  ?string  $countryCode  This represents the FedEx-system recognized country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $locationId  This is the unique FedEx location identifier.
     * @param  ?string  $airportId  This is a FedEx unique identifier for the Airport.
     * @param  ?string  $postalCode  This represents the FedEx-system recognized postal code.
     * @param  ?string  $stateOrProvinceCode  This represents the FedEx-system recognized state or province code.
     * @param  ?int  $locationNumber  The op-co specific numeric identifier for a FedEx location.
     */
    public function __construct(
        public readonly ?string $serviceArea = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $locationId = null,
        public readonly ?string $airportId = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?int $locationNumber = null,
    ) {
    }
}
