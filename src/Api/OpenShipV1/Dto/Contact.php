<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Contact extends Dto
{
    /**
     * @param  ?string  $personName  Specify person name.<br>Example: John Taylor
     * @param  ?string  $tollFreePhoneNumber  Specify toll free phone number.<br>Example: XXXX7812
     * @param  ?string  $emailAddress  Specify email address.<br>Example: sample@company.com
     * @param  ?string  $phoneNumber  Specify phone number.<br>Example: XXX567890
     * @param  ?string  $phoneExtension  Specify phone extension.<br>Example: 91
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
