<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class VariableHandlingChargeDetail extends Dto
{
    /**
     * @param  ?float  $percentValue  variable handling percentage <br> Example: 25.67
     * @param  ?Money  $fixedValue  Optional, but if indicated 'amount' and 'currency' must be provided.
     * @param  ?string  $rateElementBasis  Description of the percentage <br> Example: NET_CHARGE
     * @param  ?string  $rateTypeBasis  Optional <br> RateType Basis <br> Example: ACCOUNT
     */
    public function __construct(
        public readonly ?float $percentValue = null,
        public readonly ?Money $fixedValue = null,
        public readonly ?string $rateElementBasis = null,
        public readonly ?string $rateTypeBasis = null,
    ) {
    }
}
