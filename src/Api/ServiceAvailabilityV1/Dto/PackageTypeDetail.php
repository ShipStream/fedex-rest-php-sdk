<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageTypeDetail extends Dto
{
    protected static array $complexArrayTypes = ['packagingInfoList' => [SubPackageInfo::class]];

    /**
     * @param  ?KeyDisplayTextVo  $serviceType  this object holds applicable key and display text value pairs.
     * @param  ?Weight  $oneRateMaxWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?Weight  $maxWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?string[]  $rateTypes  A set of possible rate types allowed for each Package type
     * @param  SubPackageInfo[]|null  $packagingInfoList  An array of possible packaging types, a packaging description and applicable dimensions for each Package type.
     * @param  ?KeyDisplayTextVo  $packageType  this object holds applicable key and display text value pairs.
     * @param  ?Weight  $maxMetricWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?Weight  $oneRateMaxMetricWeightAllowed  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?Money  $maxDeclaredValue  Optional, but if indicated 'amount' and 'currency' must be provided.
     */
    public function __construct(
        public readonly ?KeyDisplayTextVo $serviceType = null,
        public readonly ?Weight $oneRateMaxWeightAllowed = null,
        public readonly ?Weight $maxWeightAllowed = null,
        public readonly ?array $rateTypes = null,
        public readonly ?array $packagingInfoList = null,
        public readonly ?KeyDisplayTextVo $packageType = null,
        public readonly ?Weight $maxMetricWeightAllowed = null,
        public readonly ?Weight $oneRateMaxMetricWeightAllowed = null,
        public readonly ?Money $maxDeclaredValue = null,
    ) {
    }
}
