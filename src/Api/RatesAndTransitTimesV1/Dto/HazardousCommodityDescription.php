<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityDescription extends Dto
{
    /**
     * @param  ?int  $sequenceNumber  In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     * @param  ?string[]  $processingOptions  Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     * @param  ?string[]  $subsidiaryClasses  Specifies the hazardous material subsidiary classes.
     * @param  ?string  $labelText  Specifies the DOT diamond hazard label type. This element can also include limited quantity or exemption number.
     * @param  ?string  $technicalName  Specify the technical name for the hazardous commodity.
     * @param  ?HazardousCommodityPackingDetail  $packingDetails  Specifies documentation and limits for validation of an individual packing group/category.
     * @param  ?string  $authorization  Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     * @param  ?bool  $reportableQuantity  The element specifies the reportable quantity of the hazardous material.
     * @param  ?float  $percentage  Indicates the percentage.
     * @param  ?string  $id  Specifies the ID of label text.
     * @param  ?string  $packingGroup  Identifies IATA packing group for a hazardous commodity.
     * @param  ?string  $properShippingName  The proper shipping name as defined by the regulation.<br>The name can also include qualifying words.
     * @param  ?string  $hazardClass  Specify hazard class for commodity.
     */
    public function __construct(
        public readonly ?int $sequenceNumber = null,
        public readonly ?array $processingOptions = null,
        public readonly ?array $subsidiaryClasses = null,
        public readonly ?string $labelText = null,
        public readonly ?string $technicalName = null,
        public readonly ?HazardousCommodityPackingDetail $packingDetails = null,
        public readonly ?string $authorization = null,
        public readonly ?bool $reportableQuantity = null,
        public readonly ?float $percentage = null,
        public readonly ?string $id = null,
        public readonly ?string $packingGroup = null,
        public readonly ?string $properShippingName = null,
        public readonly ?string $hazardClass = null,
    ) {
    }
}
