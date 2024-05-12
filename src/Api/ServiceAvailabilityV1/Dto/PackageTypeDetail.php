<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageTypeDetail extends Dto
{
    protected static array $complexArrayTypes = ['packagingInfoList' => [SubPackageInfo::class]];

    /**
     * @param  ?KeyDisplayTextVo1  $serviceType  this object holds applicable key and display text value pairs.
     * @param  ?Weight1  $oneRateMaxWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?Weight1  $maxWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?string[]  $rateTypes  A set of possible rate types allowed for each Package type
     * @param  SubPackageInfo[]|null  $packagingInfoList  An array of possible packaging types, a packaging description and applicable dimensions for each Package type.
     * @param  ?KeyDisplayTextVo1  $packageType  this object holds applicable key and display text value pairs.
     * @param  ?Weight1  $maxMetricWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?Weight1  $oneRateMaxMetricWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?Money  $maxDeclaredValue  Optional, but if indicated 'amount' and 'currency' must be provided.
     */
    public function __construct(
        public readonly ?KeyDisplayTextVo1 $serviceType = null,
        public readonly ?Weight1 $oneRateMaxWeightAllowed = null,
        public readonly ?Weight1 $maxWeightAllowed = null,
        public readonly ?array $rateTypes = null,
        public readonly ?array $packagingInfoList = null,
        public readonly ?KeyDisplayTextVo1 $packageType = null,
        public readonly ?Weight1 $maxMetricWeightAllowed = null,
        public readonly ?Weight1 $oneRateMaxMetricWeightAllowed = null,
        public readonly ?Money $maxDeclaredValue = null,
    ) {
    }
}
