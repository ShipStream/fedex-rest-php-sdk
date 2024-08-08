<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentEPaymentDetail extends Dto
{
    /**
     * @param  ?string  $epaymentProcessor  e-payment processor
     * @param  ?string  $ePaymentMode  Method for e-payment
     * @param  ?string  $creditCardType  Credit card used for e-payment
     * @param  ?string  $creditCardExpirationDate  Credit card expiration date
     * @param  ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentEPaymentDetailAmount  $amount  E-payment credit card amount
     */
    public function __construct(
        public readonly ?string $epaymentProcessor = null,
        public readonly ?string $ePaymentMode = null,
        public readonly ?string $creditCardType = null,
        public readonly ?string $creditCardExpirationDate = null,
        public readonly ?TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentEPaymentDetailAmount $amount = null,
    ) {
    }
}
