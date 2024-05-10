<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class VariableHandlingChargeDetail extends Dto
{
    /**
     * @param  ?float  $percentValue  variable handling percentage <br> Example: 25.67
     * @param  ?mixed[]  $fixedValue  Rate charge fixed value
     * @param  ?string  $rateElementBasis  Description of the percentage <br> Example: NET_CHARGE
     * @param  ?string  $rateTypeBasis  Optional <br> RateType Basis <br> Example: ACCOUNT
     */
    public function __construct(
        public readonly ?float $percentValue = null,
        public readonly ?array $fixedValue = null,
        public readonly ?string $rateElementBasis = null,
        public readonly ?string $rateTypeBasis = null,
    ) {
    }
}
