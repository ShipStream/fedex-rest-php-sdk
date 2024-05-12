<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Payment extends Dto
{
    /**
     * @param  string  $paymentType  Specifies the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
     * @param  ?Payor  $payor  Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
     */
    public function __construct(
        public readonly string $paymentType,
        public readonly ?Payor $payor = null,
    ) {
    }
}