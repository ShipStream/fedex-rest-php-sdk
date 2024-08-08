<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class PendingShipmentAccessorDetail extends Dto
{
    /**
     * @param  ?string  $password  Specifies the accessor password.
     * @param  ?string  $role  Specifies the accessor role.
     * @param  ?string  $emailLabelUrl  Specifies the URL for the email label.
     * @param  ?string  $userId  Specifies the accessor User ID.
     */
    public function __construct(
        public readonly ?string $password = null,
        public readonly ?string $role = null,
        public readonly ?string $emailLabelUrl = null,
        public readonly ?string $userId = null,
    ) {
    }
}
