<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightPhoneNumberDetail extends Dto
{
    /**
     * @param  ?string  $phoneNumberType  This provides the type of phoneNumber being used in request.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     * @param  ?string  $phoneNumber  This provides the phone number
     */
    public function __construct(
        public readonly ?string $phoneNumberType = null,
        public readonly ?string $phoneNumber = null,
    ) {
    }
}
