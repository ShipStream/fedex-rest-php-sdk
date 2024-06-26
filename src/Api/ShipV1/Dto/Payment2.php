<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Payment2 extends Dto
{
    /**
     * @param  ?Payor  $payor  Information about the person who is paying for the shipment. Not applicable for credit card payment.
     * @param  ?BillingDetails  $billingDetails  These are billing details.
     * @param  ?string  $paymentType  This is a payment type, basically indicates who is the payor for the shipment.<br>Required for Express and Ground.<br>The payment type COLLECT is applicable only for Ground shipments.
     */
    public function __construct(
        public readonly ?Payor $payor = null,
        public readonly ?BillingDetails $billingDetails = null,
        public readonly ?string $paymentType = null,
    ) {
    }
}
