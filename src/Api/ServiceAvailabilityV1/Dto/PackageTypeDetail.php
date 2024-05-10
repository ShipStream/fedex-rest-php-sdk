<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageTypeDetail extends Dto
{
    protected static array $complexArrayTypes = ['packagingInfoList' => [SubPackageInfo::class]];

    /**
     * @param  ?string  $serviceType  Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $oneRateMaxWeightAllowed  Maximum Weight allowed for the Packaging type to send with One Fixed Rate
     * @param  ?string  $maxWeightAllowed  Maximum Weight allowed for the Packaging type
     * @param  ?string[]  $rateTypes  A set of possible rate types allowed for each Package type
     * @param  SubPackageInfo[]|null  $packagingInfoList  An array of possible packaging types, a packaging description and applicable dimensions for each Package type.
     * @param  ?string  $packageType
     * @param  ?string  $maxMetricWeightAllowed  Maximum Metric Weight allowed for the Packaging type
     * @param  ?string  $oneRateMaxMetricWeightAllowed  Maximum Metric Weight allowed for the Packaging type with One Fixed Rate
     * @param  ?mixed[]  $maxDeclaredValue  This is the maximum declared value.
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?string $oneRateMaxWeightAllowed = null,
        public readonly ?string $maxWeightAllowed = null,
        public readonly ?array $rateTypes = null,
        public readonly ?array $packagingInfoList = null,
        public readonly ?string $packageType = null,
        public readonly ?string $maxMetricWeightAllowed = null,
        public readonly ?string $oneRateMaxMetricWeightAllowed = null,
        public readonly ?array $maxDeclaredValue = null,
    ) {
    }
}
