<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlRequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = [
        'associatedFreightLineItems' => AssociatedFreightLineItemDetail::class,
        'contentRecord' => ContentRecord::class,
    ];

    /**
     * @param  string  $subPackagingType  This is a physical packaging type used for the package. <br>Example: TUBE, CARTON, CONTAINER. etc.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, visit FedEx.com or contact your FedEx representative.<br>Note: Sub packaging CAGE is not applicable for LTL Freight shipment.
     * @param  Weight  $weight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  AssociatedFreightLineItemDetail[]  $associatedFreightLineItems  Specifies associated freight line items.
     * @param  ?int  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ContentRecord[]|null  $contentRecord  Specifies the details of contents of the package.
     * @param  ?Money  $declaredValue  Specifies taxes or miscellaneous charge.
     * @param  ?Dimensions  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     */
    public function __construct(
        public string $subPackagingType,
        public Weight $weight,
        public array $associatedFreightLineItems,
        public ?int $groupPackageCount = null,
        public ?array $contentRecord = null,
        public ?Money $declaredValue = null,
        public ?Dimensions $dimensions = null,
    ) {}
}
