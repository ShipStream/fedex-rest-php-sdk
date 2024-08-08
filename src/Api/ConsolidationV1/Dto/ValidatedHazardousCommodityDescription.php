<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatedHazardousCommodityDescription extends Dto
{
    /**
     * @param  ?int  $sequenceNumber  In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     * @param  ?string  $packingInstructions  Specifies Packing Instructions.
     * @param  ?string[]  $subsidiaryClasses  Specifies subsidiary Classes.
     * @param  ?string  $labelText  Specifies Hazard Label Text.
     * @param  ?string  $tunnelRestrictionCode  There are five categories of tunnel categorization with A representing the least restrictive and E as the most restrictive. Category A, as the least restrictive, will not be sign-posted. Category E, the most restrictive, only allows the passage of UN2919, UN3291, UN3331, UN3359 and UN3373.
     * @param  ?string  $specialProvisions  Specifies Special Provisions if any.
     * @param  ?string  $properShippingNameAndDescription  Fully-expanded descriptive text for a hazardous commodity.
     * @param  ?string  $technicalName  Specifies Technical Name.
     * @param  ?string  $symbols  Specifies Symbols.
     * @param  ?string  $authorization  Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     * @param  ?string[]  $attributes  Specifies attributes.
     * @param  ?string  $id  Specifies the Identification.
     * @param  ?string  $packingGroup  Specifies packing Group.
     * @param  ?string  $properShippingName  Specifies Proper Shipping Name.
     * @param  ?string  $hazardClass  Specifies hazard Class.
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
