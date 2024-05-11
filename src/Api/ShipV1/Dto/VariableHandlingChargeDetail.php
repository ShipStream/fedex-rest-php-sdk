<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class VariableHandlingChargeDetail extends Dto
{
    /**
     * @param  ?string  $rateType  The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc.
     * @param  ?float  $percentValue  This is the variable handling percentage. If the percent value is mentioned as 10, it means 10%(multiplier of 0.1).<br>Example: 12.45
     * @param  ?string  $rateLevelType  indicates whether or not the rating is being done at the package level, or if the packages are bundled together. At the package level, charges are applied based on the details of each individual package. If they are bundled, one package is chosen as the parent and charges are applied based on that one package.
     * @param  ?mixed[]  $fixedValue  This is to specify a fixed handling charge on the shipment. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example: 5.00.
     * @param  ?string  $rateElementBasis  Specify the charge type upon which the variable handling percentage amount is calculated.
     */
    public function __construct(
        public readonly ?string $rateType = null,
        public readonly ?float $percentValue = null,
        public readonly ?string $rateLevelType = null,
        public readonly ?array $fixedValue = null,
        public readonly ?string $rateElementBasis = null,
    ) {
    }
}
