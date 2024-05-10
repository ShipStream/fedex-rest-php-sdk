<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class PhoneNumber extends Dto
{
    /**
     * @param  string  $areaCode  Area-Code of given area
     * @param  string  $countryCode  The two-letter code used to identify a country.
     * @param  string  $localNumber  Local Number of the person
     * @param  ?string  $extension  Extension of the phone number
     * @param  ?string  $personalIdentificationNumber  Personal Identification Number
     */
    public function __construct(
        public readonly string $areaCode,
        public readonly string $countryCode,
        public readonly string $localNumber,
        public readonly ?string $extension = null,
        public readonly ?string $personalIdentificationNumber = null,
    ) {
    }
}
