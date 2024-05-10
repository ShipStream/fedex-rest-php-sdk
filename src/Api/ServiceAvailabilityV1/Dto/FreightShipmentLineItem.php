<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipmentLineItem extends Dto
{
    /**
     * @param  string  $freightClass  Specify the freight class based on the item to be shipped and its weight measured per unit volume(Example: Kilograms per Cubic Meter) the shipment is categorized accordingly.<a href='http://www.fedex.com/en-us/shipping/freight/class-calculator.html' target='_blank'>Click here</a> to use Freight class calculator
     * @param  string  $weight  Total weight of items for this line item
     * @param  ?int  $pieces  Optional <br> Total number of pieces <br> Example: 1
     * @param  ?mixed[]  $volume  Individual line item volume. <br>                Conditionally required. <br> Need volume for intra mexico rates
     * @param  ?int  $handlingUnits  Optional<br>Number of individual handling units to which this line applies. (NOTE - Total of line-item-level handling units may not balance to shipment-level total handling units) <br> Example: 1
     * @param  ?string  $description  Customer-provided description of this line item <br> Example: Description
     * @param  ?string  $packaging  Packaging type for this line item <br> Example: SELFPACKAGE
     * @param  ?bool  $classProvidedByCustomer  defaults to false. FEDEX INTERNAL USE ONLY for FedEx system that estimate freight class from customer-provided dimensions and weight <br> Example: true
     * @param  ?string  $hazardousMaterials  Indicates the kind of hazardous material content in this line item <br> Example: HAZARDOUS_MATERIALS
     * @param  ?string  $dimensions  Individual line item dimensions. Conditionally required. Need volume for intra mexico rates.
     */
    public function __construct(
        public readonly string $freightClass,
        public readonly string $weight,
        public readonly ?int $pieces = null,
        public readonly ?array $volume = null,
        public readonly ?int $handlingUnits = null,
        public readonly ?string $description = null,
        public readonly ?string $packaging = null,
        public readonly ?bool $classProvidedByCustomer = null,
        public readonly ?string $hazardousMaterials = null,
        public readonly ?string $dimensions = null,
    ) {
    }
}
