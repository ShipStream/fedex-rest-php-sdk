<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatedHazardousCommodityDescription extends Dto
{
    /**
     * @param  ?int  $sequenceNumber  In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.<br>Example: 876
     * @param  ?string  $packingInstructions  Specifies Packing Instructions.<br>Example: packingInstructions
     * @param  ?string[]  $subsidiaryClasses  Specifies subsidiary Classes.<br>Example:["Subsidiary Classes"]
     * @param  ?string  $labelText  Specifies the text for the label.
     * @param  ?string  $tunnelRestrictionCode  There are five categories of tunnel categorization with A representing the least restrictive and E as the most restrictive. Category A, as the least restrictive, will not be sign-posted. Category E, the most restrictive, only allows the passage of UN2919, UN3291, UN3331, UN3359 and UN3373.<br>Example: UN2919
     * @param  ?string  $specialProvisions  Specifies Special Provisions if any.<br>Example: specialProvisions
     * @param  ?string  $properShippingNameAndDescription  Fully-expanded descriptive text for a hazardous commodity.<br>Example: properShippingNameAndDescription
     * @param  ?string  $technicalName  Specifies Technical Name.<br>Example: technicalName
     * @param  ?string  $symbols  Specifies Symbols.<br>Example: symbols
     * @param  ?string  $authorization  Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     * @param  ?string[]  $attributes  Specifies attributes.<br>Example: ["attributes"]
     * @param  ?string  $id  Specifies the Identification.<br>Example: 1234
     * @param  ?string  $packingGroup  Specifies packing group.
     * @param  ?string  $properShippingName  Specifies proper shipping name.
     * @param  ?string  $hazardClass  Specifies hazard class.<br>Example: Hazard Class
     */
    public function __construct(
        public ?int $sequenceNumber = null,
        public ?string $packingInstructions = null,
        public ?array $subsidiaryClasses = null,
        public ?string $labelText = null,
        public ?string $tunnelRestrictionCode = null,
        public ?string $specialProvisions = null,
        public ?string $properShippingNameAndDescription = null,
        public ?string $technicalName = null,
        public ?string $symbols = null,
        public ?string $authorization = null,
        public ?array $attributes = null,
        public ?string $id = null,
        public ?string $packingGroup = null,
        public ?string $properShippingName = null,
        public ?string $hazardClass = null,
    ) {}
}
