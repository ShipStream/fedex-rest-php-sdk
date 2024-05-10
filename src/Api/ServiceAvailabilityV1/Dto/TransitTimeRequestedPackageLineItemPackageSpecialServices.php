<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItemPackageSpecialServices extends Dto
{
    /**
     * @param  ?string[]  $specialServiceTypes  Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     * @param  ?TransitTimeRequestedPackageLineItemPackageSpecialServicesCodDetail  $codDetail  Package COD Detail.  COD main information is set in shipment level.
     * @param  ?TransitTimeRequestedPackageLineItemPackageSpecialServicesDryIceWeight  $dryIceWeight  Specify weight of dry ice used in packaging.
     * @param  ?TransitTimeRequestedPackageLineItemPackageSpecialServicesDangerousGoodsDetail  $dangerousGoodsDetail  Use this object to specify Dangerous Goods shipment Detail.
     * @param  ?TransitTimeRequestedPackageLineItemPackageSpecialServicesAlcoholDetail  $alcoholDetail  Provides information about the RecipientType and ShipperAgreementType. This object is manadatory if alcohol special service is selected.
     * @param  ?int  $pieceCountVerificationBoxCount  Indicates the box count used for piece count verification.
     * @param  ?TransitTimeRequestedPackageLineItemPackageSpecialServicesBatteryDetails  $batteryDetails  Describes attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures are not required.
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
        public readonly ?TransitTimeRequestedPackageLineItemPackageSpecialServicesCodDetail $codDetail = null,
        public readonly ?TransitTimeRequestedPackageLineItemPackageSpecialServicesDryIceWeight $dryIceWeight = null,
        public readonly ?TransitTimeRequestedPackageLineItemPackageSpecialServicesDangerousGoodsDetail $dangerousGoodsDetail = null,
        public readonly ?TransitTimeRequestedPackageLineItemPackageSpecialServicesAlcoholDetail $alcoholDetail = null,
        public readonly ?int $pieceCountVerificationBoxCount = null,
        public readonly ?TransitTimeRequestedPackageLineItemPackageSpecialServicesBatteryDetails $batteryDetails = null,
    ) {
    }
}
