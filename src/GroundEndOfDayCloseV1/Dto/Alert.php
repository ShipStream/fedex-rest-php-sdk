<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class Alert extends Dto
{
    /**
     * @param  ?string  $code  Specifies the api alert code.<br>Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH
     * @param  ?string  $alertType  Specifies the api alert type.
     * @param  ?string  $message  Specifies the api alert message.<br>Example: Recipient Postal-City Mismatch.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $alertType = null,
        public readonly ?string $message = null,
    ) {
    }
}
