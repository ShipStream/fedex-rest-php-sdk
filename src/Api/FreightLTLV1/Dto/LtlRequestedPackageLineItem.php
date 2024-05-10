<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlRequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = [
        'associatedFreightLineItems' => [AssociatedFreightLineItemDetail::class],
        'contentRecord' => [ContentRecord::class],
    ];

    /**
     * @param  string  $subPackagingType  This is a physical packaging type used for the package. <br>Example: TUBE, CARTON, CONTAINER. etc.<br><a onclick='loadDocReference("subpackagetypes")'>Click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, visit FedEx.com or contact your FedEx representative.<br>Note: Sub packaging CAGE is not applicable for LTL Freight shipment.
     * @param  string  $weight  Indicate the total weight of the requested package line items.
     * @param  AssociatedFreightLineItemDetail[]  $associatedFreightLineItems  Specifies associated freight line items.
     * @param  ?int  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ContentRecord[]|null  $contentRecord  Specifies the details of contents of the package.
     * @param  ?string  $declaredValue  This is the Declared Value represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     * @param  ?string  $dimensions  Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     */
    public function __construct(
        public readonly string $subPackagingType,
        public readonly string $weight,
        public readonly array $associatedFreightLineItems,
        public readonly ?int $groupPackageCount = null,
        public readonly ?array $contentRecord = null,
        public readonly ?string $declaredValue = null,
        public readonly ?string $dimensions = null,
    ) {
    }
}
