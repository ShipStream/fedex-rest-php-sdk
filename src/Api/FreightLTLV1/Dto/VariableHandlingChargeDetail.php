<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class VariableHandlingChargeDetail extends Dto
{
    /**
     * @param  ?string  $rateType  This is the rate type used for this package.
     * @param  ?float  $percentValue  This is the variable handling percentage. If the percent value is mentioned as 10, it means 10%(multiplier of 0.1).<br>Example: 12.45
     * @param  ?string  $rateLevelType  Specifies if the rate level type is either Individual or Bundled.
     * @param  ?string  $fixedValue  This is to specify a fixed handling charge on the shipment. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example: 5.00.
     * @param  ?string  $rateElementBasis  Specify the charge type upon which the variable handling percentage amount is calculated.
     */
    public function __construct(
        public readonly ?string $rateType = null,
        public readonly ?float $percentValue = null,
        public readonly ?string $rateLevelType = null,
        public readonly ?string $fixedValue = null,
        public readonly ?string $rateElementBasis = null,
    ) {
    }
}
