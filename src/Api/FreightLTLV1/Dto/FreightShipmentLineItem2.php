<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipmentLineItem2 extends Dto
{
    /**
     * @param  string  $subPackagingType  This is a sub package type for the package.<br><a href='/api/en-us/guides/api-reference.html#subpackagetypes' target='_blank'>Click here to see Sub-Package Types </a>
     * @param  string  $description  Customer-provided description of this line item.<br>Example: description
     * @param  Weight2  $weight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  int  $pieces  Total number of pieces.<br> Example: 12
     * @param  string  $freightClass  Required.<br>Freight class for this line item.
     * @param  string  $id  Indicates the ID for the box.<br> Example: 123
     * @param  ?int  $handlingUnits  Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)<br> Example: 12
     * @param  ?string  $nmfcCode  Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an  online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
     * @param  ?string  $volume  Specifies volume (cubic measure) for this commodity.
     * @param  ?string  $purchaseOrderNumber  Indicates the purchase order number for printed reference.<br>Example: 50
     * @param  ?string  $hazardousMaterials  Indicates the kind of hazardous material content in this line item.
     * @param  ?string  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?bool  $classProvidedByCustomer  The estimate freight class from customer-provided dimensions and weight.
     */
    public function __construct(
        public readonly string $subPackagingType,
        public readonly string $description,
        public readonly Weight2 $weight,
        public readonly int $pieces,
        public readonly string $freightClass,
        public readonly string $id,
        public readonly ?int $handlingUnits = null,
        public readonly ?string $nmfcCode = null,
        public readonly ?string $volume = null,
        public readonly ?string $purchaseOrderNumber = null,
        public readonly ?string $hazardousMaterials = null,
        public readonly ?string $dimensions = null,
        public readonly ?bool $classProvidedByCustomer = null,
    ) {
    }
}
