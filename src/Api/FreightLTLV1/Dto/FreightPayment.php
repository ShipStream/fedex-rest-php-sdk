<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightPayment extends Dto
{
    /**
     * @param  string  $paymentType  Indicates who and how the shipment will be paid for.
     *                               Required for Express and Ground.
     * @param  ?Payor  $payor  Information about the person who is paying for the shipment. Not applicable for credit card payment.
     */
    public function __construct(
        public readonly string $paymentType,
        public readonly ?Payor $payor = null,
    ) {
    }
}
