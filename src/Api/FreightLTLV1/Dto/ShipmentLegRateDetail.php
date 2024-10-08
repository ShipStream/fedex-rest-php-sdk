<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentLegRateDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'discounts' => RateDiscount::class,
        'surcharges' => Surcharge::class,
        'taxes' => Tax::class,
    ];

    /**
     * @param  RateDiscount[]|null  $discounts  Specifies the list of discounts. <br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?string  $pricingCode  Identifies the type of pricing used for this shipment.
     * @param  ?string  $legDescription  Human-readable text describing the shipment leg.
     * @param  Surcharge[]|null  $surcharges  Specifies the list of surcharges.<br>Valid value is:<li>PEAK</li><li>PEAK_ADDTIONAL_HANDLING</li><li>PEAK_OVERSIZE</li><li>PEAK_RESIDENTIAL_DELIVERY</li>
     * @param  ?string[]  $specialRatingApplied  Indicates which special rating cases applied to this shipment.
     * @param  Tax[]|null  $taxes  Specifies the list of taxes.
     * @param  ?string  $rateScale  Indicates the rate scale used.
     * @param  ?float  $totalNetCharge  This shipment's totalNetCharge and totalDutiesTaxesAndFees. Some duties and taxes are only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     * @param  ?float  $totalBaseCharge  Specifies the total base charge list
     * @param  ?CurrencyExchangeRate  $currencyExchangeRate  Specifies the currency exchange performed on financial amounts on this rate.
     * @param  ?Weight  $totalBillingWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?string  $currency  Indicate the three-character ISO currency code. <br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
     */
    public function __construct(
        public ?array $discounts = null,
        public ?string $pricingCode = null,
        public ?string $legDescription = null,
        public ?array $surcharges = null,
        public ?array $specialRatingApplied = null,
        public ?array $taxes = null,
        public ?string $rateScale = null,
        public ?float $totalNetCharge = null,
        public ?float $totalBaseCharge = null,
        public ?CurrencyExchangeRate $currencyExchangeRate = null,
        public ?Weight $totalBillingWeight = null,
        public ?string $currency = null,
    ) {}
}
