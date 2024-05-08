<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class PhoneNumberDetail extends Dto
{
    /**
     * @param  mixed[]  $number  Phone Number details of the user
     * @param  string  $permissions  Shows the Phone Permission Status
     * @param  string  $usage  Specifies the Phone Usage
     * @param  ?string  $type  Phone Number Type
     * @param  ?string  $phoneNotificationFormatType  Phone Notification Format Type
     */
    public function __construct(
        public readonly array $number,
        public readonly string $permissions,
        public readonly string $usage,
        public readonly ?string $type = null,
        public readonly ?string $phoneNotificationFormatType = null,
    ) {
    }
}
