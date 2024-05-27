<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipmentLineItem extends Dto
{
    /**
     * @param  string  $freightClass  Specify the freight class based on the item to be shipped and its weight measured per unit volume(Example: Kilograms per Cubic Meter) the shipment is categorized accordingly.<a href='http://www.fedex.com/en-us/shipping/freight/class-calculator.html' target='_blank'>Click here</a> to use Freight class calculator
     * @param  Weight  $weight  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?int  $pieces  Optional <br> Total number of pieces <br> Example: 1
     * @param  ?Volume  $volume  Optional
     *
     * Individual line item volume.
     *
     * Conditional
     *
     * Need Volume or Rate for intra mexico rates
     * @param  ?int  $handlingUnits  Optional<br>Number of individual handling units to which this line applies. (NOTE - Total of line-item-level handling units may not balance to shipment-level total handling units) <br> Example: 1
     * @param  ?string  $description  Customer-provided description of this line item <br> Example: Description
     * @param  ?string  $packaging  Packaging type for this line item <br> Example: SELFPACKAGE
     * @param  ?bool  $classProvidedByCustomer  defaults to false. FEDEX INTERNAL USE ONLY for FedEx system that estimate freight class from customer-provided dimensions and weight <br> Example: true
     * @param  ?string  $hazardousMaterials  Indicates the kind of hazardous material content in this line item <br> Example: HAZARDOUS_MATERIALS
     * @param  ?Dimensions  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     */
    public function __construct(
        public readonly string $freightClass,
        public readonly Weight $weight,
        public readonly ?int $pieces = null,
        public readonly ?Volume $volume = null,
        public readonly ?int $handlingUnits = null,
        public readonly ?string $description = null,
        public readonly ?string $packaging = null,
        public readonly ?bool $classProvidedByCustomer = null,
        public readonly ?string $hazardousMaterials = null,
        public readonly ?Dimensions $dimensions = null,
    ) {
    }
}
