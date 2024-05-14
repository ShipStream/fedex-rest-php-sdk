<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageRateDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'surcharges' => [Surcharge::class],
        'freightDiscounts' => [RateDiscount::class],
    ];

    /**
     * @param  ?string  $ratedWeightMethod  Indicates which weight was used for the rate, e.g. actual or dimensional. <br> Example: dimensional
     * @param  ?float  $totalTaxes  Specifies the sum of all taxes on this package.<br> Example: 1257.25
     * @param  ?float  $totalFreightDiscounts  The total discounts used in the rate calculation.<br> Example: 1257.2<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?float  $baseCharge  Identifies the manner in which the chargeRate for this line item was applied.<br> Example: 125
     * @param  ?float  $totalRebates  The total sum of all rebates applied to this package.Example: 12
     * @param  ?string  $rateType  Specifies the type used for this specific set of rate data.
     * @param  ?Weight  $billingWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?float  $netFreight  Specifies the sum of freight charges.<br> Example: 10
     * @param  Surcharge[]|null  $surcharges  Specifies the list of surcharges.<br>Valid value is:<li>PEAK</li><li>PEAK_ADDTIONAL_HANDLING</li><li>PEAK_OVERSIZE</li><li>PEAK_RESIDENTIAL_DELIVERY</li>
     * @param  ?float  $totalSurcharges  The sum of all surcharges on the package.<br> Example: 569
     * @param  ?float  $netFedExCharge  Specifies the sum of packages netFreight and totalSurcharges (not including totalTaxes).<br> Example: 125.32
     * @param  ?float  $netCharge  Specifies the sum of packages netFreight, totalSurcharges and totalTaxes. <br>Example: 563.98
     * @param  RateDiscount[]|null  $freightDiscounts  All rate discounts that apply to this shipment.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     */
    public function __construct(
        public readonly ?string $ratedWeightMethod = null,
        public readonly ?float $totalTaxes = null,
        public readonly ?float $totalFreightDiscounts = null,
        public readonly ?float $baseCharge = null,
        public readonly ?float $totalRebates = null,
        public readonly ?string $rateType = null,
        public readonly ?Weight $billingWeight = null,
        public readonly ?float $netFreight = null,
        public readonly ?array $surcharges = null,
        public readonly ?float $totalSurcharges = null,
        public readonly ?float $netFedExCharge = null,
        public readonly ?float $netCharge = null,
        public readonly ?array $freightDiscounts = null,
    ) {
    }
}
