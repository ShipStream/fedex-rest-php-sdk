<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = ['contentRecord' => [ContentRecord::class]];

    /**
     * @param  string  $weight  Indicate the total weight of the requested package line items.
     * @param  ?string  $subPackagingType  This is a physical packaging type used for the package. <br><a onclick='loadDocReference("subpackagetypes")'>Click here to see sub-packaging types</a><br>For more information on physical packaging or packaging regulatory requirements, visit fedex.com or contact your FedEx representative.
     * @param  ?int  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ContentRecord[]|null  $contentRecord  Specifies the content record.
     * @param  ?string  $declaredValue  This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     * @param  ?string  $dimensions  Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details on how to calculate variable handling charges at the package level. If indicated, element rateLevelType is required.
     * @param  ?mixed[]  $packageSpecialServices  These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     */
    public function __construct(
        public readonly string $weight,
        public readonly ?string $subPackagingType = null,
        public readonly ?int $groupPackageCount = null,
        public readonly ?array $contentRecord = null,
        public readonly ?string $declaredValue = null,
        public readonly ?string $dimensions = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public readonly ?array $packageSpecialServices = null,
    ) {
    }
}
