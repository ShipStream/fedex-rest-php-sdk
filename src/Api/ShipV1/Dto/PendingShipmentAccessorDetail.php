<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

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
        public readonly ?string $password = null,
        public readonly ?string $role = null,
        public readonly ?string $emailLabelUrl = null,
        public readonly ?string $userId = null,
    ) {
    }
}
