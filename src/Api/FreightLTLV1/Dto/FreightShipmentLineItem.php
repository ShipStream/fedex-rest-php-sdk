<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipmentLineItem extends Dto
{
    /**
     * @param  int  $handlingUnits  Number of individual handling units to which this line applies.<br> (The total of line-item-level handling units may not balance to shipment-level total handling units.)
     * @param  string  $subPackagingType  This is a sub package type for the package.<br><a href='/api/en-us/guides/api-reference.html#subpackagetypes' target='_blank'>Click here to see Sub-Package Types </a>
     * @param  int  $pieces  Specifies Total number of pieces.
     * @param  string  $freightClass  Specifies Freight class for this line item.
     * @param  string  $id  Specifies Identification for content in this line item.
     * @param  ?string  $nmfcCode  Specify the NMFC(National Motor Freight Classification) Code for commodity in order to get a rate quote or create an online freight shipping label or Bill of Lading.<br><i>Example:<ul><li>115030-02</li><li>056828-05</li><li>056828-29</li></ul></i>
     * @param  ?string  $description  Customer-provided description of this line item.
     * @param  ?string  $volume
     * @param  ?string  $purchaseOrderNumber  Specifies Purchase order number for this line item.
     * @param  ?string  $hazardousMaterials  Indicates the kind of hazardous material content in this line item.
     * @param  ?string  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions along with the unit of measurement must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The Maximum/minimum dimension values vary based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighing for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     */
    public function __construct(
        public readonly int $handlingUnits,
        public readonly string $subPackagingType,
        public readonly string $weight,
        public readonly int $pieces,
        public readonly string $freightClass,
        public readonly string $id,
        public readonly ?string $nmfcCode = null,
        public readonly ?string $description = null,
        public readonly ?string $volume = null,
        public readonly ?string $purchaseOrderNumber = null,
        public readonly ?string $hazardousMaterials = null,
        public readonly ?string $dimensions = null,
    ) {
    }
}
