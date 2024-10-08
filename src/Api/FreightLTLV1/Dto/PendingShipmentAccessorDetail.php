<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PendingShipmentAccessorDetail extends Dto
{
    /**
     * @param  ?string  $password  Specifies the accessor password.<br>Example: password
     * @param  ?string  $role  Specifies the accessor role.<br>Example: role
     * @param  ?string  $emailLabelUrl  Specifies the URL for the email label.<br>Example: emailLabelUrl
     * @param  ?string  $userId  Specifies the accessor User ID.<br>Example: userId
     */
    public function __construct(
        public ?string $password = null,
        public ?string $role = null,
        public ?string $emailLabelUrl = null,
        public ?string $userId = null,
    ) {}
}
