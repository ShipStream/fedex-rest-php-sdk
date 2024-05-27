<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PhoneNumber extends Dto
{
    /**
     * @param  ?string  $areaCode  Indicate the area code for the phone number.
     * @param  ?string  $localNumber  Indicate the local phone number for contacting in the event of an emergency. Maximum length  is 10.
     * @param  ?string  $extension  Indicate the extension for the phone number.
     * @param  ?string  $personalIdentificationNumber  Indicate the Personal Identification Number associated with the phone number.
     */
    public function __construct(
        public readonly ?string $areaCode = null,
        public readonly ?string $localNumber = null,
        public readonly ?string $extension = null,
        public readonly ?string $personalIdentificationNumber = null,
    ) {
    }
}
