<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ConsolidationShipmentsConsolidationRequestedShipmentsRequestedPackageLineItems extends Dto
{
    /**
     * @param  ?string  $sequenceNumber  Optional. <br>Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.
     * @param  ?string  $groupNumber  This is group shipment number. Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.<br>Example: 10
     * @param  ?string  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ?ConsolidationShipmentsConsolidationRequestedShipmentsRequestedPackageLineItemsTrackingId  $trackingId  Indicates the tracking details of the package.
     * @param  ?Weight  $weights  Indicate the shipment total weight in pounds.<br>Example: 10.6<br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
     * @param  ?Dimensions  $dimensions  Conditional.<br>The dimensions of the package; length, width & height. All three dimensions must be indicated.<br>Note: Dimensions are required with YOUR_PACKAGING package type.
     * @param  ?ConsolidationShipmentsConsolidationRequestedShipmentsRequestedPackageLineItemsCustomerReferences  $customerReferences  These are additional customer reference data for commercial invoice.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     */
    public function __construct(
        public readonly ?string $sequenceNumber = null,
        public readonly ?string $groupNumber = null,
        public readonly ?string $groupPackageCount = null,
        public readonly ?ConsolidationShipmentsConsolidationRequestedShipmentsRequestedPackageLineItemsTrackingId $trackingId = null,
        public readonly ?Weight $weights = null,
        public readonly ?Dimensions $dimensions = null,
        public readonly ?ConsolidationShipmentsConsolidationRequestedShipmentsRequestedPackageLineItemsCustomerReferences $customerReferences = null,
    ) {
    }
}
