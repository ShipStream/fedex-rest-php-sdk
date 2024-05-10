<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageSpecialServicesRequested extends Dto
{
    protected static array $attributeMap = ['packageCodDetail' => 'packageCODDetail'];

    protected static array $complexArrayTypes = ['batteryDetails' => [BatteryDetail::class]];

    /**
     * @param  ?string[]  $specialServiceTypes  Indicate the Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     * @param  ?string  $signatureOptionType  Indicate the Signature Type. <br>Valid Values: <ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.This option is available for residential deliveries only</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     * @param  ?PriorityAlertDetail  $priorityAlertDetail  Specifies the Priority Alert Detail.
     * @param  ?SignatureOptionDetail  $signatureOptionDetail  This element specifies Signature option details.
     * @param  ?AlcoholDetail  $alcoholDetail  These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     * @param  ?DangerousGoodsDetail  $dangerousGoodsDetail  Provide dangerous goods shipment details.
     * @param  ?PackageCodDetail  $packageCodDetail  These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
     * @param  ?int  $pieceCountVerificationBoxCount  Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     * @param  BatteryDetail[]|null  $batteryDetails  Provide details about the batteries or cells that are contained within this specific package.
     * @param  ?Weight  $dryIceWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
        public readonly ?string $signatureOptionType = null,
        public readonly ?PriorityAlertDetail $priorityAlertDetail = null,
        public readonly ?SignatureOptionDetail $signatureOptionDetail = null,
        public readonly ?AlcoholDetail $alcoholDetail = null,
        public readonly ?DangerousGoodsDetail $dangerousGoodsDetail = null,
        public readonly ?PackageCodDetail $packageCodDetail = null,
        public readonly ?int $pieceCountVerificationBoxCount = null,
        public readonly ?array $batteryDetails = null,
        public readonly ?Weight $dryIceWeight = null,
    ) {
    }
}
