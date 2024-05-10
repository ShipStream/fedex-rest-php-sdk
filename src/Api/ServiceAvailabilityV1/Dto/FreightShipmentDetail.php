<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipmentDetail extends Dto
{
    protected static array $attributeMap = ['aliasId' => 'aliasID'];

    protected static array $complexArrayTypes = ['lineItem' => [FreightShipmentLineItem::class]];

    /**
     * @param  ?string  $shipmentDimensions  Optional
     *
     * Overall Shipment Dimensions Value
     * @param  ?bool  $alternateBilling  Optional : Designates a bill-to address <br> Example: true
     * @param  FreightShipmentLineItem[]|null  $lineItem  Required
     *
     * Class/weight pairs and associated details for a Freight shipment
     * @param  ?string  $role  Required <br> Indicates the role of the party submitting the transaction <br> Example: SHIPPER
     * @param  ?float  $clientDiscountPercent  Conditional <br> This is only used for anonymous rate requests <br> Example: 10.5
     * @param  ?string  $fedExFreightBillingContactAndAddress  Conditional
     *
     * Required if a FedEx Freight account number is specified
     * @param  ?string  $aliasId  Conditional. <br> This is bill to alias identifier.
     * @param  ?mixed[]  $liabilityCoverageDetail  Specifies the Liability Coverage detail for Freight Shipment.
     * @param  ?mixed[]  $fedExFreightAccountNumber  Conditional
     *
     * FedEx Freight account number used with FEDEX_FREIGHT or FEDEX_FREIGHT_PRIORITY service; required for account-specific Freight rates
     * @param  ?int  $totalHandlingUnits  Optional
     *
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative
     */
    public function __construct(
        public readonly ?string $shipmentDimensions = null,
        public readonly ?bool $alternateBilling = null,
        public readonly ?array $lineItem = null,
        public readonly ?string $role = null,
        public readonly ?float $clientDiscountPercent = null,
        public readonly ?string $fedExFreightBillingContactAndAddress = null,
        public readonly ?string $aliasId = null,
        public readonly ?array $liabilityCoverageDetail = null,
        public readonly ?array $fedExFreightAccountNumber = null,
        public readonly ?int $totalHandlingUnits = null,
    ) {
    }
}
