<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PhoneNumberDetail extends Dto
{
    /**
     * @param  ?PhoneNumber  $number  A phone number for a party. Numeric only
     * @param  ?string[]  $permissions  Indicate the Email Permission Type.
     * @param  ?string  $usage  Specify if the phone usage is Primary or Secondary.
     * @param  ?string  $type  Indicate the Phone Number Type.
     */
    public function __construct(
        public readonly ?PhoneNumber $number = null,
        public readonly ?array $permissions = null,
        public readonly ?string $usage = null,
        public readonly ?string $type = null,
    ) {
    }
}
