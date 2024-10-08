<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Payment2 extends Dto
{
    /**
     * @param  ?Payor  $payor  Information about the person who is paying for the shipment. Not applicable for credit card payment.
     * @param  ?BillingDetails  $billingDetails  These are billing details.
     * @param  ?string  $paymentType  This is a payment type, basically indicates who is the payor for the shipment.<br>Required for Express and Ground.<br>The payment type COLLECT is applicable only for Ground shipments.
     */
    public function __construct(
        public ?Payor $payor = null,
        public ?BillingDetails $billingDetails = null,
        public ?string $paymentType = null,
    ) {}
}
