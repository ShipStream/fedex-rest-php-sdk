<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = ['customerReferences' => [CustomerReference::class]];

    /**
     * @param  Weight1  $weight  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?string  $physicalPackaging  Specify the packaging used.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     * @param  ?int  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ?string  $itemDescriptionForClearance  Describe the content of the package for customs clearance purposes. This applies to intra-UAE, intra-Columbia and intra-Brazil shipments.
     * @param  CustomerReference[]|null  $customerReferences  These are additional customer reference data for commercial invoice.
     * @param  ?ContentRecord  $contentRecord  package/shipment content details
     * @param  ?Money  $declaredValue  Optional, but if indicated 'amount' and 'currency' must be provided.
     * @param  ?Dimensions1  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?PackageSpecialServicesRequested  $packageSpecialServices  These are special services that are available at the package level for some or all service types.
     */
    public function __construct(
        public readonly Weight1 $weight,
        public readonly ?string $physicalPackaging = null,
        public readonly ?int $groupPackageCount = null,
        public readonly ?string $itemDescriptionForClearance = null,
        public readonly ?array $customerReferences = null,
        public readonly ?ContentRecord $contentRecord = null,
        public readonly ?Money $declaredValue = null,
        public readonly ?Dimensions1 $dimensions = null,
        public readonly ?PackageSpecialServicesRequested $packageSpecialServices = null,
    ) {
    }
}
