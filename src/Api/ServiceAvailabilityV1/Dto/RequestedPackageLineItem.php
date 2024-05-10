<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = ['customerReferences' => [CustomerReference::class]];

    /**
     * @param  string  $weight  These are the weight details.
     * @param  ?string  $physicalPackaging  Specify the packaging used.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     * @param  ?int  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ?string  $itemDescriptionForClearance  Describe the content of the package for customs clearance purposes. This applies to intra-UAE, intra-Columbia and intra-Brazil shipments.
     * @param  CustomerReference[]|null  $customerReferences  These are additional customer reference data for commercial invoice.
     * @param  ?mixed[]  $contentRecord  Specify in details the contents of the package.
     * @param  ?mixed[]  $declaredValue  This is the Declared Value represents FedEx maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     * @param  ?string  $dimensions  Indicate the dimensions of the package. <br>Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer FedEx Service Guide for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?PackageSpecialServicesRequested  $packageSpecialServices  These are special services that are available at the package level for some or all service types.
     */
    public function __construct(
        public readonly string $weight,
        public readonly ?string $physicalPackaging = null,
        public readonly ?int $groupPackageCount = null,
        public readonly ?string $itemDescriptionForClearance = null,
        public readonly ?array $customerReferences = null,
        public readonly ?array $contentRecord = null,
        public readonly ?array $declaredValue = null,
        public readonly ?string $dimensions = null,
        public readonly ?PackageSpecialServicesRequested $packageSpecialServices = null,
    ) {
    }
}
