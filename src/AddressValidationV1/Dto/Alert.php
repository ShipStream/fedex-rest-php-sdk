<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Alert extends Dto
{
    /**
     * @param  ?string  $code  Indicates the API alert code.
     * @param  ?string  $message  Indicates the API alert message.
     * @param  ?string  $alertType  Indicates the API alert type.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $message = null,
        public readonly ?string $alertType = null,
    ) {
    }
}
