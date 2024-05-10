<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Alert extends Dto
{
    /**
     * @param  ?string  $code  Specifies the alert code.
     * @param  ?string  $alertType  Specifies the alert type.
     * @param  ?string  $message  Specifies the alert message.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $alertType = null,
        public readonly ?string $message = null,
    ) {
    }
}
