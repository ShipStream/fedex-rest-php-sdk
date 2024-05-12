<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipmentDetail extends Dto
{
    protected static array $attributeMap = ['aliasId' => 'aliasID'];

    protected static array $complexArrayTypes = ['lineItem' => [FreightShipmentLineItem::class]];

    /**
     * @param  ?Dimensions1  $shipmentDimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?bool  $alternateBilling  Optional : Designates a bill-to address <br> Example: true
     * @param  FreightShipmentLineItem[]|null  $lineItem  Required
     *
     * Class/weight pairs and associated details for a Freight shipment
     * @param  ?string  $role  Required <br> Indicates the role of the party submitting the transaction <br> Example: SHIPPER
     * @param  ?float  $clientDiscountPercent  Conditional <br> This is only used for anonymous rate requests <br> Example: 10.5
     * @param  ?ContactAndAddress  $fedExFreightBillingContactAndAddress  Specifies the contact and address details of a location.
     * @param  ?string  $aliasId  Conditional. <br> This is bill to alias identifier.
     * @param  ?LiabilityCoverageDetail  $liabilityCoverageDetail  This is used specify the line item level liability coverage.
     * @param  ?AccountNumber1  $fedExFreightAccountNumber  This is FedEx account number details.
     * @param  ?int  $totalHandlingUnits  Optional
     *
     * Total number of individual handling units in the entire shipment (for unit pricing). May not be negative
     */
    public function __construct(
        public readonly ?Dimensions1 $shipmentDimensions = null,
        public readonly ?bool $alternateBilling = null,
        public readonly ?array $lineItem = null,
        public readonly ?string $role = null,
        public readonly ?float $clientDiscountPercent = null,
        public readonly ?ContactAndAddress $fedExFreightBillingContactAndAddress = null,
        public readonly ?string $aliasId = null,
        public readonly ?LiabilityCoverageDetail $liabilityCoverageDetail = null,
        public readonly ?AccountNumber1 $fedExFreightAccountNumber = null,
        public readonly ?int $totalHandlingUnits = null,
    ) {
    }
}
