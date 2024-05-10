<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyPhoneNumber extends Dto
{
    /**
     * @param  ?string  $areaCode  Indicate the area Code for the phone number.
     * @param  ?string  $extension  Indicate the extension for the phone number.
     * @param  ?string  $countryCode  Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $personalIdentificationNumber  Indicate the Personal Identification Number associated with the phone number.
     * @param  ?string  $localNumber  Indicate the local phone number for contacting in the event of an emergency.
     */
    public function __construct(
        public readonly ?string $areaCode = null,
        public readonly ?string $extension = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $personalIdentificationNumber = null,
        public readonly ?string $localNumber = null,
    ) {
    }
}
