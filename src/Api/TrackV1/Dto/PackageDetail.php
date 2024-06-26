<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageDetail extends Dto
{
    /**
     * @param  ?string  $physicalPackagingType  Indicate the physical package type for non-Express shipments.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Available Types</a>
     * @param  ?string  $sequenceNumber  Field which holds the number representing which package in a multi-piece shipment applies to this TrackDetail.<br> Example: 45
     * @param  ?string  $undeliveredCount  Field which holds information about total count of the undelivered packages in the shipment. <br> Example: 7
     * @param  ?PackagingDescription  $packagingDescription  Description of the packaging used for this shipment.
     * @param  ?string  $count  Field which holds the total number of pieces in the shipment which includes the package represented by this TrackDetail.<br> Example: 1
     * @param  ?TrackingWeightAndDimensions  $weightAndDimensions  Field which holds the weight and dimension information.
     * @param  ?string[]  $packageContent  Field which holds information about the package content of the shipment. Populated for secure users only.<br> Example: wire hangers.
     * @param  ?string  $contentPieceCount  Field which holds information about total count of the packages in the shipment.<br> Example: 100
     * @param  ?Amount  $declaredValue
     */
    public function __construct(
        public readonly ?string $physicalPackagingType = null,
        public readonly ?string $sequenceNumber = null,
        public readonly ?string $undeliveredCount = null,
        public readonly ?PackagingDescription $packagingDescription = null,
        public readonly ?string $count = null,
        public readonly ?TrackingWeightAndDimensions $weightAndDimensions = null,
        public readonly ?array $packageContent = null,
        public readonly ?string $contentPieceCount = null,
        public readonly ?Amount $declaredValue = null,
    ) {
    }
}
