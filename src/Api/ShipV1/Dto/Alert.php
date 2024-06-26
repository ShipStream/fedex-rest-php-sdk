<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Alert extends Dto
{
    /**
     * @param  ?string  $code  Specifies the API alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH
     * @param  ?string  $alertType  Specifies the API alert type.
     * @param  ?string  $message  Specifies the API alert message.<br>Example: Recipient Postal-City Mismatch.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $alertType = null,
        public readonly ?string $message = null,
    ) {
    }
}
