<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class Contact2 extends Dto
{
    /**
     * @param  ?string  $personName  Specify the recipient contact person's name. Max Length is 70.<br>Example: John Taylor
     * @param  ?string  $emailAddress  Contact person's email address. Max length is 80.<br>Example: sample@company.com
     * @param  ?string  $phoneNumber  Contact person's phone number. Max length is 15.<br>Example: 1234567890
     * @param  ?string  $phoneExtension  contact person's phone extension. Max length is 6.<br>Example: 91
     * @param  ?string  $faxNumber  Contact person's fax number. Max length is 15.<br>Example: 956123
     * @param  ?string  $companyName  Specify contact person's company name. Max length is 35.<br>Example: FedEx
     */
    public function __construct(
        public readonly ?string $personName = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $faxNumber = null,
        public readonly ?string $companyName = null,
    ) {
    }
}
