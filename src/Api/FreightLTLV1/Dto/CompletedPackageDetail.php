<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedPackageDetail extends Dto
{
    protected static array $complexArrayTypes = ['trackingIds' => [TrackingId::class]];

    /**
     * @param  ?int  $sequenceNumber  This is package sequence number. No negative value or decimals are allowed.<br>Example: 256
     * @param  ?PackageOperationalDetail  $operationalDetail  Package-level data required for labeling and/or movement.
     * @param  ?string  $signatureOption  It specifies the signature option applied, to allow cases in which the value requested conflicted with other service features in the shipment. <br>Example: DIRECT
     * @param  TrackingId[]|null  $trackingIds  Tracking details for the package.
     * @param  ?int  $groupNumber  This is group shipment number. Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.<br>Example: 10
     * @param  ?string  $oversizeClass  Indicates the oversize classification.<br>Example: OVERSIZE_1
     * @param  ?PackageRating  $packageRating  This class groups together all package-level rate data for a single package (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
     * @param  ?Weight  $dryIceWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?CompletedHazardousPackageDetail  $hazardousPackageDetail  Complete package-level hazardous commodity information for a single package.
     */
    public function __construct(
        public readonly ?int $sequenceNumber = null,
        public readonly ?PackageOperationalDetail $operationalDetail = null,
        public readonly ?string $signatureOption = null,
        public readonly ?array $trackingIds = null,
        public readonly ?int $groupNumber = null,
        public readonly ?string $oversizeClass = null,
        public readonly ?PackageRating $packageRating = null,
        public readonly ?Weight $dryIceWeight = null,
        public readonly ?CompletedHazardousPackageDetail $hazardousPackageDetail = null,
    ) {
    }
}
