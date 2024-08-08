<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class EMailDetail extends Dto
{
    /**
     * @param  ?string  $emailNotificationFormatType  Email Notification Format Type
     * @param  ?string  $address  Address
     * @param  ?string[]  $permissions  Email Permission Type
     */
    public function __construct(
        public readonly ?string $emailNotificationFormatType = null,
        public readonly ?string $address = null,
        public readonly ?array $permissions = null,
    ) {
    }
}
