<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentRateDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'freightDiscount' => [RateDiscount::class],
        'surCharges' => [Surcharge::class],
    ];

    /**
     * @param  ?CurrencyExchangeRate  $currencyExchangeRate  Specifies the currency exchange performed on financial amounts for this rate.
     * @param  ?string  $currency  Indicates the currency associated with the amount.
     * @param  ?string  $rateZone  Indicates the rate zone used.
     * @param  ?string  $pricingCode  Indicates the type of pricing code.
     * @param  ?float  $totalFreightDiscount  Indicates the total discounts used in the rate calculation. Example: 856.32
     * @param  ?string[]  $specialRatingApplied  Indicates which special rating cases applied to this shipment.
     * @param  ?float  $totalSurcharges  This is sum of all surcharges on the package. Example: 586.25
     * @param  RateDiscount[]|null  $freightDiscount  This is total discount used in the rate calculation.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?float  $fuelSurchargePercent  This is fuel surcharge percentage.
     * @param  ?mixed[]  $totalBillingWeight  Sum of billing weight for the shipment.
     * @param  ?mixed[]  $totalDimWeight  This is total of dimensional weight for the shipment.
     * @param  ?int  $dimDivisor  Identifies the type of divisor applied.
     * @param  Surcharge[]|null  $surCharges  Indicates the surcharges applied to this shipment.
     */
    public function __construct(
        public readonly ?CurrencyExchangeRate $currencyExchangeRate = null,
        public readonly ?string $currency = null,
        public readonly ?string $rateZone = null,
        public readonly ?string $pricingCode = null,
        public readonly ?float $totalFreightDiscount = null,
        public readonly ?array $specialRatingApplied = null,
        public readonly ?float $totalSurcharges = null,
        public readonly ?array $freightDiscount = null,
        public readonly ?float $fuelSurchargePercent = null,
        public readonly ?array $totalBillingWeight = null,
        public readonly ?array $totalDimWeight = null,
        public readonly ?int $dimDivisor = null,
        public readonly ?array $surCharges = null,
    ) {
    }
}
