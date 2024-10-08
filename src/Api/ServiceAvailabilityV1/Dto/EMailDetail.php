<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class EMailDetail extends Dto
{
    /**
     * @param  ?string  $emailNotificationFormatType  These are email notification format type.
     * @param  ?string  $address  This is the email address.
     * @param  ?string[]  $permissions  Indicate the Email Permission Type.
     */
    public function __construct(
        public ?string $emailNotificationFormatType = null,
        public ?string $address = null,
        public ?array $permissions = null,
    ) {}
}
