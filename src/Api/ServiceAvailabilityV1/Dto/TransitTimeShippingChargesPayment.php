<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeShippingChargesPayment extends Dto
{
    /**
     * @param  ?TransitTimeShippingChargesPaymentPayor  $payor  Information about the person who is paying for the shipment.  Not applicable for credit card payment.
     * @param  ?string  $paymentType  Applicable for Express and Ground rates.<br>
     *                                Indicates who and how the shipment will be paid for.
     */
    public function __construct(
        public readonly ?TransitTimeShippingChargesPaymentPayor $payor = null,
        public readonly ?string $paymentType = null,
    ) {
    }
}
