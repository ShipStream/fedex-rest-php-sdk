<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactVo extends Dto
{
    /**
     * @param  ?string  $personName  Identifies the contact person's name. Max Length is 70.<br> Example: John Taylor
     * @param  ?string  $phoneNumber  Identifies the phone number associated with this contact. Max length is 15. <br>Example: '1234567890'
     * @param  ?string  $companyName  Identifies the company this contact is associated with. Max length is 35. <br> Example: Fedex
     */
    public function __construct(
        public readonly ?string $personName = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $companyName = null,
    ) {
    }
}
