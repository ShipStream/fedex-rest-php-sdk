<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Payment extends Dto
{
    /**
     * @param  ?Payor  $payor  This is payer Information responsible for paying for the shipment.<br>Note: Optional when paymentType is SENDER.
     * @param  ?string  $paymentType  Indicate the payment Type. Applicable for Express and Ground rates.
     */
    public function __construct(
        public readonly ?Payor $payor = null,
        public readonly ?string $paymentType = null,
    ) {
    }
}
