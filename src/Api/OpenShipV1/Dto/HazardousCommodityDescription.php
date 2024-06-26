<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityDescription extends Dto
{
    /**
     * @param  bool  $reportableQuantity  Reportable Quantity
     * @param  string  $packingGroup  Identifies DOT packing group for a hazardous commodity
     * @param  ?int  $sequenceNumber  Required<br>Specify the sequence number.<br>Example: 9812
     * @param  ?string[]  $processingOptions  Indicates any special processing options to be applied to the description of the dangerous goods commodity <br> Example: ["INCLUDE_SPECIAL_PROVISIONS"]
     * @param  ?string[]  $subsidiaryClasses  Specifies subsidiary Classes.<br>Example:["Subsidiary Classes"]
     * @param  ?string  $labelText  Specifies the text for the label.
     * @param  ?string  $technicalName  Specifies the technical name for the hazardous material.
     * @param  ?HazardousCommodityPackingDetail  $packingDetails  Specifies documentation and limits for validation of an individual packing group/category. DG Data Upload Mode: Required (IATA), Optional (Other), DG Full Validation Mode: Required (IATA), Optional (Other),
     * @param  ?string  $authorization  Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     * @param  ?float  $percentage  Percentage<br>Example: 12.45
     * @param  ?string  $id  ID<br>Example: 123
     * @param  ?string  $properShippingName  The proper shipping name as defined by the regulation. The name can also include qualifying words<br>Example: properShippingName
     * @param  ?string  $hazardClass  Specifies the hazard class for the commodity<br>Example: hazard Class
     */
    public function __construct(
        public readonly bool $reportableQuantity,
        public readonly string $packingGroup,
        public readonly ?int $sequenceNumber = null,
        public readonly ?array $processingOptions = null,
        public readonly ?array $subsidiaryClasses = null,
        public readonly ?string $labelText = null,
        public readonly ?string $technicalName = null,
        public readonly ?HazardousCommodityPackingDetail $packingDetails = null,
        public readonly ?string $authorization = null,
        public readonly ?float $percentage = null,
        public readonly ?string $id = null,
        public readonly ?string $properShippingName = null,
        public readonly ?string $hazardClass = null,
    ) {
    }
}
