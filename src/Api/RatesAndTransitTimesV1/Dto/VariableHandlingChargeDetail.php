<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class VariableHandlingChargeDetail extends Dto
{
    /**
     * @param  string  $rateElementBasis  Indicate the rate charge on which, the variable handling amount is calculated.
     * @param  ?string  $rateType  The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc.
     * @param  ?float  $percentValue  Indicate the variable handling percentage. Actual percentage (10 means 10%, which is a mutiplier of 0.1).
     * @param  ?string  $rateLevelType  indicates whether or not the rating is being done at the package level, or if the packages are bundled together. At the package level, charges are applied based on the details of each individual package. If they are bundled, one package is chosen as the parent and charges are applied based on that one package.
     * @param  ?string  $fixedValue  Indicate the Fixed value. <br>If you choose FIXED_AMOUNT as the ChargeType, this element allows you to enter the fixed value of the handling charge. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example - 5.00.
     */
    public function __construct(
        public readonly string $rateElementBasis,
        public readonly ?string $rateType = null,
        public readonly ?float $percentValue = null,
        public readonly ?string $rateLevelType = null,
        public readonly ?string $fixedValue = null,
    ) {
    }
}
