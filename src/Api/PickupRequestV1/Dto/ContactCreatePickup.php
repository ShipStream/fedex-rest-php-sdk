<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactCreatePickup extends Dto
{
    /**
     * @param  ?string  $companyName  Specify the contact person's company name. Maximum length is 35.
     * @param  ?string  $personName  Specify the contact person's name. Maximum Length is 70.
     * @param  ?string  $phoneNumber  Specify the contact person's phone number. Minimum Length is 8 and Maximum legth is 13.
     * @param  ?string  $phoneExtension  Specify the contact person's phone extension. Maximum length is 6.
     */
    public function __construct(
        public readonly ?string $companyName = null,
        public readonly ?string $personName = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $phoneExtension = null,
    ) {
    }
}
