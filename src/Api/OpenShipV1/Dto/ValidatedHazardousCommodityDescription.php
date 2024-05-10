<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatedHazardousCommodityDescription extends Dto
{
    /**
     * @param  ?int  $sequenceNumber  In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.<br>Example: 876
     * @param  ?string  $packingInstructions  Specifies Packing Instructions.<br>Example: packingInstructions
     * @param  ?string[]  $subsidiaryClasses  Required
     *
     * Indicates list of subsidiary classes<br>Example: ["Subsidiary Classes"]
     * @param  ?string  $labelText  Specifies the text for the label.
     * @param  ?string  $tunnelRestrictionCode  There are five categories of tunnel categorization with A representing the least restrictive and E as the most restrictive. Category A, as the least restrictive, will not be sign-posted. Category E, the most restrictive, only allows the passage of UN2919, UN3291, UN3331, UN3359 and UN3373.<br>Example: UN2919
     * @param  ?string  $specialProvisions  Specifies Special Provisions if any.<br>Example: specialProvisions
     * @param  ?string  $properShippingNameAndDescription  Fully-expanded descriptive text for a hazardous commodity.<br>Example: properShippingNameAndDescription
     * @param  ?string  $technicalName  Specifies Technical Name.<br>Example: technicalName
     * @param  ?string  $symbols  Specifies Symbols.<br>Example: symbols
     * @param  ?string  $authorization  Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     * @param  ?string[]  $attributes  Use this attribute to specify if the Trade documents will be uploaded post the shipment.
     * @param  ?string  $id  Specifies the Identification.<br>Example: 1234
     * @param  ?string  $packingGroup  Specifies packing group.
     * @param  ?string  $properShippingName  Specifies proper shipping name.
     * @param  ?string  $hazardClass  Specifies hazard class.<br>Example: Hazard Class
     */
    public function __construct(
        public readonly ?int $sequenceNumber = null,
        public readonly ?string $packingInstructions = null,
        public readonly ?array $subsidiaryClasses = null,
        public readonly ?string $labelText = null,
        public readonly ?string $tunnelRestrictionCode = null,
        public readonly ?string $specialProvisions = null,
        public readonly ?string $properShippingNameAndDescription = null,
        public readonly ?string $technicalName = null,
        public readonly ?string $symbols = null,
        public readonly ?string $authorization = null,
        public readonly ?array $attributes = null,
        public readonly ?string $id = null,
        public readonly ?string $packingGroup = null,
        public readonly ?string $properShippingName = null,
        public readonly ?string $hazardClass = null,
    ) {
    }
}
