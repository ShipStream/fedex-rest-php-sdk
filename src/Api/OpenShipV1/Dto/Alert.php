<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Alert extends Dto
{
    /**
     * @param  ?string  $code  This is the alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH
     * @param  ?string  $alertType  This is the alert type.
     * @param  ?string  $message  This is the alert message.<br>Example: Recipient Postal-City Mismatch.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $alertType = null,
        public readonly ?string $message = null,
    ) {
    }
}
