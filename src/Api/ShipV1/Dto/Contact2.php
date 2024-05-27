<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Contact2 extends Dto
{
    /**
     * @param  ?string  $personName  Specify person name.<br>Example: John Taylor
     * @param  ?string  $tollFreePhoneNumber  Specify toll free phone number.<br>Example: XXXX7812
     * @param  ?string  $emailAddress  Specify email address.<br>Example: sample@company.com
     * @param  ?string  $phoneNumber  The shippers phone number. <br>Minimum length is 10 and supports maximum of 15 for certain countries using longer phone numbers.<br>Note: For US and CA, a phone number must have exactly 10 digits, plus an optional leading country code of 1 or +1.<br>Example: 918xxxxx890
     * @param  ?string  $phoneExtension  The shipper's phone extension. Max length is 6.<br>Example: 91
     * @param  ?string  $companyName  Specify company name.
     * @param  ?string  $pagerNumber  Specify pager number.<br>Example: XXX7812
     * @param  ?string  $faxNumber  Specify fax number.<br>Example: XXXX567890
     * @param  ?string  $title  Specify the title of the contact.
     */
    public function __construct(
        public readonly ?string $personName = null,
        public readonly ?string $tollFreePhoneNumber = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $companyName = null,
        public readonly ?string $pagerNumber = null,
        public readonly ?string $faxNumber = null,
        public readonly ?string $title = null,
    ) {
    }
}
