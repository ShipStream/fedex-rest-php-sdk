<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageRateDetail extends Dto
{
    protected static array $complexArrayTypes = ['surcharges' => [Surcharge::class]];

    /**
     * @param  ?string  $ratedWeightMethod  Indicates the weight types used in calculating this rate, such as actual weight or dimensional weight.<br> Example: DIM
     * @param  ?float  $totalFreightDiscounts  The sum of all freight discounts for this package.<br>Example: 44.55
     * @param  ?float  $totalTaxes  The sum of all taxes on this package.<br>Example: 3.45
     * @param  ?string  $minimumChargeType  Indicates the minumum charge type. INTERNAL FEDEX USE ONLY.
     * @param  ?float  $baseCharge  The package transportation charge(prior to any discounts applied).<br>Example: 45.67
     * @param  ?float  $totalRebates  Specifies total rebates on this package.<br>Example: 4.56
     * @param  ?string  $rateType  This is the rate type used.<br>Example: PAYOR_RETAIL_PACKAGE
     * @param  ?Weight  $billingWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?float  $netFreight  This is the net freight charges. i.e. base charge minus total freight discounts for a package.<br>Example: 4.89
     * @param  Surcharge[]|null  $surcharges  These are all surcharges on this package.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     * @param  ?float  $totalSurcharges  The sum of all surcharges on this package.<br>Example: 22.56
     * @param  ?float  $netFedExCharge  This is sum of net freight and total surcharges (not including totalTaxes) for this package.<br>Example: 12.56
     * @param  ?float  $netCharge  This is the sum of net freight, total surcharges and total taxes for a package.<br>Example: 121.56
     * @param  ?string  $currency  This is the currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     */
    public function __construct(
        public readonly ?string $ratedWeightMethod = null,
        public readonly ?float $totalFreightDiscounts = null,
        public readonly ?float $totalTaxes = null,
        public readonly ?string $minimumChargeType = null,
        public readonly ?float $baseCharge = null,
        public readonly ?float $totalRebates = null,
        public readonly ?string $rateType = null,
        public readonly ?Weight $billingWeight = null,
        public readonly ?float $netFreight = null,
        public readonly ?array $surcharges = null,
        public readonly ?float $totalSurcharges = null,
        public readonly ?float $netFedExCharge = null,
        public readonly ?float $netCharge = null,
        public readonly ?string $currency = null,
    ) {
    }
}
