<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightSpecialServicePayment extends Dto
{
    /**
     * @param  ?string  $specialService  Indicates the requested Special Services.
     * @param  ?string  $paymentType  Indicates the payment type.
     */
    public function __construct(
        public readonly ?string $specialService = null,
        public readonly ?string $paymentType = null,
    ) {
    }
}
