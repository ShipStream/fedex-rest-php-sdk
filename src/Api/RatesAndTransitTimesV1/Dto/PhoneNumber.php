<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class PhoneNumber extends Dto
{
    /**
     * @param  string  $areaCode  Indicates the area code.
     * @param  string  $countryCode  The two-letter code used to identify a country.<br>Example: US
     * @param  ?string  $extension  Indicates the Extension.
     * @param  ?string  $personalIdentificationNumber  Indicates the Personal Identification Number.
     * @param  ?string  $localNumber  Telephone number to use for contact in the event of an emergency.
     */
    public function __construct(
        public readonly string $areaCode,
        public readonly string $countryCode,
        public readonly ?string $extension = null,
        public readonly ?string $personalIdentificationNumber = null,
        public readonly ?string $localNumber = null,
    ) {
    }
}
