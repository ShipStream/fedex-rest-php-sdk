<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyContact extends Dto
{
    /**
     * @param  string  $phoneNumber  The shipper's phone number. <br>Minimum length is 10 and supports maximum of 15 for certain countries using longer phone numbers.<br>Note: For US and CA, a phone number must have exactly 10 digits, plus an optional leading country code of '1' or '+1'.<br>Example: 918xxxxx890
     * @param  ?string  $personName  Specify contact name. Maximum length is 70. <br>Note: Either the companyName or personName is mandatory.<br> Example: John Taylor
     * @param  ?string  $emailAddress  Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     * @param  ?string  $phoneExtension  Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     * @param  ?string  $companyName  Specify contact company name. Maximum length is 35. <br>Note: Either the companyName or personName is mandatory.
     */
    public function __construct(
        public readonly string $phoneNumber,
        public readonly ?string $personName = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $companyName = null,
    ) {
    }
}
