<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightRequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = [
        'associatedFreightLineItems' => [AssociatedFreightLineItemDetail::class],
        'customerReferences' => [CustomerReference::class],
        'contentRecord' => [ContentRecord::class],
    ];

    /**
     * @param  string  $subPackagingType  This is a sub package type for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a>
     * @param  Weight2  $weight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  AssociatedFreightLineItemDetail[]  $associatedFreightLineItems  Specifies associated freight line items.
     * @param  ?string  $sequenceNumber  Optional. Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.
     * @param  CustomerReference[]|null  $customerReferences  These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     * @param  ?Money2  $declaredValue  Specifies taxes or miscellaneous charge.
     * @param  ?Dimensions2  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?string  $physicalPackaging  Specification of handling-unit packaging for this commodity or class line.<br>Example: class line
     * @param  ?int  $groupPackageCount  Used only with package groups as a count of packages within a group of identical packages. The package count added to existing package count on the shipment cannot exceed Open Ship package limit<br>Example: 25
     * @param  ?string  $itemDescriptionForClearance  Conditional<br>This is required for intra-UAE. Optional for intra-EU.PackageOption, ServiceOption ignore this field.
     * @param  ContentRecord[]|null  $contentRecord  Specifies the details of contents of the package.
     * @param  ?string  $itemDescription  Required for Email Label return shipments.<br> This is the item description for the package.<br>Example: item description for the package
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     */
    public function __construct(
        public readonly string $subPackagingType,
        public readonly Weight2 $weight,
        public readonly array $associatedFreightLineItems,
        public readonly ?string $sequenceNumber = null,
        public readonly ?array $customerReferences = null,
        public readonly ?Money2 $declaredValue = null,
        public readonly ?Dimensions2 $dimensions = null,
        public readonly ?string $physicalPackaging = null,
        public readonly ?int $groupPackageCount = null,
        public readonly ?string $itemDescriptionForClearance = null,
        public readonly ?array $contentRecord = null,
        public readonly ?string $itemDescription = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
    ) {
    }
}
