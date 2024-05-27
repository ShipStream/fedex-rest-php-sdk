<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentLegRateDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'discounts' => [RateDiscount::class],
        'surcharges' => [Surcharge::class],
        'taxes' => [Tax::class],
    ];

    /**
     * @param  RateDiscount[]|null  $discounts  Specifies the list of discounts. <br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?string  $pricingCode  Identifies the type of pricing used for this shipment.
     * @param  ?string  $legDescription  Human-readable text describing the shipment leg.
     * @param  Surcharge[]|null  $surcharges  Specifies the list of all surcharges that apply to this package.
     * @param  ?string[]  $specialRatingApplied  Indicates which special rating cases applied to this shipment.
     * @param  Tax[]|null  $taxes  Specifies the list of taxes.
     * @param  ?string  $rateScale  Indicates the rate scale used.
     * @param  ?float  $totalNetCharge  This shipment's totalNetCharge and totalDutiesTaxesAndFees. Some duties and taxes are only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     * @param  ?float  $totalBaseCharge  Specifies the total base charge list
     * @param  ?CurrencyExchangeRate  $currencyExchangeRate  Specifies the currency exchange performed on financial amounts for this rate.
     * @param  ?Weight  $totalBillingWeight  These are the weight details.
     * @param  ?string  $currency  Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     */
    public function __construct(
        public readonly ?array $discounts = null,
        public readonly ?string $pricingCode = null,
        public readonly ?string $legDescription = null,
        public readonly ?array $surcharges = null,
        public readonly ?array $specialRatingApplied = null,
        public readonly ?array $taxes = null,
        public readonly ?string $rateScale = null,
        public readonly ?float $totalNetCharge = null,
        public readonly ?float $totalBaseCharge = null,
        public readonly ?CurrencyExchangeRate $currencyExchangeRate = null,
        public readonly ?Weight $totalBillingWeight = null,
        public readonly ?string $currency = null,
    ) {
    }
}
