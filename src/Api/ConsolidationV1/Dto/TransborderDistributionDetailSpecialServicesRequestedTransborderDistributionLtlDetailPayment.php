<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPayment extends Dto
{
    /**
     * @param  ?string  $paymentType  Payment type for LTL transportation
     * @param  ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentPayor  $payor  Information about the person who is paying for the shipment. <br>Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     * @param  ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentEPaymentDetail  $ePaymentDetail  e-payment detail
     * @param  ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentCreditCard  $creditCard  Credit card details
     * @param  ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentCreditCardTransactionDetail  $creditCardTransactionDetail  Details for the credit card transaction
     * @param  ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentAmount  $amount  Currency type and amount details
     */
    public function __construct(
        public ?string $paymentType = null,
        public ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentPayor $payor = null,
        public ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentEPaymentDetail $ePaymentDetail = null,
        public ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentCreditCard $creditCard = null,
        public ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentCreditCardTransactionDetail $creditCardTransactionDetail = null,
        public ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentAmount $amount = null,
    ) {}
}