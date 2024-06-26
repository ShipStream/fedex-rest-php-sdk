<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Contacts extends Dto
{
    /**
     * @param  ?string  $companyName  Indicates the contact person's company name.
     * @param  ?string  $personName  Indicates the contact person's name.
     * @param  ?string  $phoneNumber  Indicates the contact person's phone number.
     * @param  ?string  $phoneExtension  Indicates the contact person's phone extension.
     * @param  ?string  $emailAddress  contact person's email address.
     */
    public function __construct(
        public readonly ?string $companyName = null,
        public readonly ?string $personName = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $emailAddress = null,
    ) {
    }
}
