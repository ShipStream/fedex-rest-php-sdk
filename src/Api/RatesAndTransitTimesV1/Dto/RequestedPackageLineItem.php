<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = ['contentRecord' => [ContentRecord::class]];

    /**
     * @param  Weight12  $weight  These are the weight details.
     * @param  ?string  $subPackagingType  This is a physical packaging type used for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see sub-packaging types</a><br>For more information on physical packaging or packaging regulatory requirements, visit fedex.com or contact your FedEx representative.
     * @param  ?int  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ContentRecord[]|null  $contentRecord  Specifies the content record.
     * @param  ?Money1  $declaredValue  Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     * @param  ?Dimensions1  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The Maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details on how to calculate variable handling charges at the package level. If indicated, element rateLevelType is required.
     * @param  ?PackageSpecialServicesRequested  $packageSpecialServices  These special services are available at the package level for some or all service types. Needs Indicated, if rate data is being requested for the special services.
     */
    public function __construct(
        public readonly Weight12 $weight,
        public readonly ?string $subPackagingType = null,
        public readonly ?int $groupPackageCount = null,
        public readonly ?array $contentRecord = null,
        public readonly ?Money1 $declaredValue = null,
        public readonly ?Dimensions1 $dimensions = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public readonly ?PackageSpecialServicesRequested $packageSpecialServices = null,
    ) {
    }
}
