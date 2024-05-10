<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeShippingChargesPaymentPayorResponsiblePartyAccountNumber extends Dto
{
    /**
     * @param  string  $value  Conditionally required.<br>Account number is required for ACCOUNT based rates. Account number value max length is 9. <br> Example: 60xxxxxx2
     */
    public function __construct(
        public readonly string $value,
    ) {
    }
}
