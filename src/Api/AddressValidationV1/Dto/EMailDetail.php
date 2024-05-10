<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class EMailDetail extends Dto
{
    /**
     * @param  ?string  $emailNotificationFormatType  Format Type of email notification
     * @param  ?string  $address  Email address of the user
     * @param  ?string  $permissions  Email Permission Type
     */
    public function __construct(
        public readonly ?string $emailNotificationFormatType = null,
        public readonly ?string $address = null,
        public readonly ?string $permissions = null,
    ) {
    }
}
