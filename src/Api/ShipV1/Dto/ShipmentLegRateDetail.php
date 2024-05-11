<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentLegRateDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'surcharges' => [Surcharge::class],
        'freightDiscounts' => [RateDiscount::class],
    ];

    /**
     * @param  ?string  $rateZone  Indicates the rate zone used (based on origin and destination).<br>Example: rateZone
     * @param  ?string  $pricingCode  Specifies the Pricing Code.<br>Example: pricingCode
     * @param  mixed[][]|null  $taxes  All transportation-based taxes applicable to this shipment.
     * @param  ?mixed[]  $totalDimWeight  Sum of dimensional weights for all packages.
     * @param  ?float  $totalRebates  Specifies the total rebate.<br>Example: 2.0
     * @param  ?float  $fuelSurchargePercent  Specifies a fuel surcharge percentage.<br>Example: 6.0
     * @param  ?mixed[]  $currencyExchangeRate  Specifies currency exchange rate.
     * @param  ?int  $dimDivisor  The value used to calculate the weight based on the dimensions.<br>Example: 6
     * @param  ?string  $rateType  Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE
     * @param  ?string  $legDestinationLocationId  Specifies the location id the destination of shipment leg.<br>Example: HKAA
     * @param  ?string  $dimDivisorType  Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType
     * @param  ?float  $totalBaseCharge  The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0
     * @param  ?string  $ratedWeightMethod  Indicates which weight was used.<br>Example: ratedWeightMethod
     * @param  ?float  $totalFreightDiscounts  The sum of all discounts.<br>Example: 9.0
     * @param  ?float  $totalTaxes  Total of the transportation-based taxes.<br>Example: 12.6
     * @param  ?string  $minimumChargeType  Specifies minimum charge type.
     * @param  ?float  $totalDutiesAndTaxes  Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78
     * @param  ?float  $totalNetFreight  The freight charge minus discounts.<br>Example: 6.0
     * @param  ?float  $totalNetFedExCharge  This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2
     * @param  Surcharge[]|null  $surcharges  These are all surcharges on this package.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
     * @param  ?float  $totalSurcharges  The total of all surcharges.<br>Example: 5.0
     * @param  ?mixed[]  $totalBillingWeight  The weight used to calculate these rates.
     * @param  RateDiscount[]|null  $freightDiscounts  Indicates the freight discounts.
     * @param  ?string  $rateScale  Indicates the rate scale used.<br>Example: 6702
     * @param  ?float  $totalNetCharge  The net charge after applying all discounts and surcharges.<br>Example: 253
     * @param  ?float  $totalNetChargeWithDutiesAndTaxes  Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67
     * @param  ?string  $currency  This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     */
    public function __construct(
        public readonly ?string $rateZone = null,
        public readonly ?string $pricingCode = null,
        public readonly ?array $taxes = null,
        public readonly ?array $totalDimWeight = null,
        public readonly ?float $totalRebates = null,
        public readonly ?float $fuelSurchargePercent = null,
        public readonly ?array $currencyExchangeRate = null,
        public readonly ?int $dimDivisor = null,
        public readonly ?string $rateType = null,
        public readonly ?string $legDestinationLocationId = null,
        public readonly ?string $dimDivisorType = null,
        public readonly ?float $totalBaseCharge = null,
        public readonly ?string $ratedWeightMethod = null,
        public readonly ?float $totalFreightDiscounts = null,
        public readonly ?float $totalTaxes = null,
        public readonly ?string $minimumChargeType = null,
        public readonly ?float $totalDutiesAndTaxes = null,
        public readonly ?float $totalNetFreight = null,
        public readonly ?float $totalNetFedExCharge = null,
        public readonly ?array $surcharges = null,
        public readonly ?float $totalSurcharges = null,
        public readonly ?array $totalBillingWeight = null,
        public readonly ?array $freightDiscounts = null,
        public readonly ?string $rateScale = null,
        public readonly ?float $totalNetCharge = null,
        public readonly ?float $totalNetChargeWithDutiesAndTaxes = null,
        public readonly ?string $currency = null,
    ) {
    }
}
