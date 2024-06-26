<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RatedShipmentDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'edtCharges' => [EdtCharge::class],
        'ratedPackages' => [RatedPackageDetail::class],
        'ancillaryFeesAndTaxes' => [AncillaryFeesAndTaxes::class],
        'preferredEdtCharges' => [EdtCharge::class],
    ];

    /**
     * @param  ?string  $rateType  Indicates the rate type used for this rate data.
     * @param  ?string  $ratedWeightMethod  Indicates the weight type used for the rate.'
     * @param  ?float  $totalDutiesTaxesAndFees  This is the total amount of the duties and taxes plus the total ancillary fees and taxes.
     * @param  ?float  $totalDiscounts  This is the total discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?float  $totalDutiesAndTaxes  The total of shipment/package Duties and taxes.
     * @param  ?VariableHandlingCharges  $variableHandlingCharges  The variable handling charge amount calculated based on the requested variable handling charge detail.
     * @param  EdtCharge[]|null  $edtCharges  These are the estimation and duty  charges.
     * @param  ?float  $totalAncillaryFeesAndTaxes  Indicates the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     * @param  RatedPackageDetail[]|null  $ratedPackages  These are the package-level data for this rate type.
     * @param  ?float  $totalNetFedExCharge  This shipment's totalNetFedExChargeList, which is totalNetFreight plus totalSurcharges (not including totalTaxes).
     * @param  ?string  $quoteNumber  Indicates the unique identifier for a specific rate quotation.<br> Example: XX1123XX
     * @param  mixed[][]|null  $shipmentLegRateDetails  This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     * @param  ?string  $freightChargeBasis  This identifies the manner in which the chargeRate was applied, for Freight.<br> Valid values are: <ul><li>CWT - Charge rate applies per weight.</li><li>FLAT - Charge rate is a flat-rate amount.</li><li>MINIMUM</li></ul>
     * @param  ?VariableHandlingCharges  $totalVariableHandlingCharges  The variable handling charge amount calculated based on the requested variable handling charge detail.
     * @param  ?float  $totalVatCharge  This is total value added tax charges (VAT).
     * @param  AncillaryFeesAndTaxes[]|null  $ancillaryFeesAndTaxes  This is the total amount of the shipment-level fees and taxes that are not based on transportation charges of commodity-level estimated duties and taxes.
     * @param  EdtCharge[]|null  $preferredEdtCharges  Specifies the Edt charges.
     * @param  ?float  $totalNetCharge  This is net charges for the shipment.
     * @param  ?float  $totalBaseCharge  This is total base charges for the shipment.
     * @param  ?float  $totalNetChargeWithDutiesAndTaxes  This is total net Charges with Duties And Taxes for the shipment.
     * @param  ?ShipmentRateDetail  $shipmentRateDetail  This is shipment level rate data.
     */
    public function __construct(
        public readonly ?string $rateType = null,
        public readonly ?string $ratedWeightMethod = null,
        public readonly ?float $totalDutiesTaxesAndFees = null,
        public readonly ?float $totalDiscounts = null,
        public readonly ?float $totalDutiesAndTaxes = null,
        public readonly ?VariableHandlingCharges $variableHandlingCharges = null,
        public readonly ?array $edtCharges = null,
        public readonly ?float $totalAncillaryFeesAndTaxes = null,
        public readonly ?array $ratedPackages = null,
        public readonly ?float $totalNetFedExCharge = null,
        public readonly ?string $quoteNumber = null,
        public readonly ?array $shipmentLegRateDetails = null,
        public readonly ?string $freightChargeBasis = null,
        public readonly ?VariableHandlingCharges $totalVariableHandlingCharges = null,
        public readonly ?float $totalVatCharge = null,
        public readonly ?array $ancillaryFeesAndTaxes = null,
        public readonly ?array $preferredEdtCharges = null,
        public readonly ?float $totalNetCharge = null,
        public readonly ?float $totalBaseCharge = null,
        public readonly ?float $totalNetChargeWithDutiesAndTaxes = null,
        public readonly ?ShipmentRateDetail $shipmentRateDetail = null,
    ) {
    }
}
