<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItem extends Dto
{
    /**
     * @param  TransitTimeRequestedPackageLineItemWeight  $weight  Weight of the packages or shipment
     * @param  ?TransitTimeRequestedPackageLineItemDeclaredValue  $declaredValue  This is the Declared Value - represents FedEx Maximum liability in connection with a shipment of that Package, including but not limited to, any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information relating to the Shipment.
     * @param  ?TransitTimeRequestedPackageLineItemDimensions  $dimensions  Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
     * @param  ?TransitTimeRequestedPackageLineItemPackageSpecialServices  $packageSpecialServices  Optional.<br>These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
     */
    public function __construct(
        public readonly TransitTimeRequestedPackageLineItemWeight $weight,
        public readonly ?TransitTimeRequestedPackageLineItemDeclaredValue $declaredValue = null,
        public readonly ?TransitTimeRequestedPackageLineItemDimensions $dimensions = null,
        public readonly ?TransitTimeRequestedPackageLineItemPackageSpecialServices $packageSpecialServices = null,
    ) {
    }
}
