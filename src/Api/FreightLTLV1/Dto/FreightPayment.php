<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightPayment extends Dto
{
    /**
     * @param  string  $paymentType  Indicates who and how the shipment will be paid for.
     *                               Required for Express and Ground.
     * @param  ?Payor  $payor  Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Optional when paymentType is SENDER.
     */
    public function __construct(
        public readonly string $paymentType,
        public readonly ?Payor $payor = null,
    ) {
    }
}
