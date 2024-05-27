<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageSpecialServicesRequested extends Dto
{
    protected static array $complexArrayTypes = ['batteryDetails' => [BatteryDetail::class]];

    /**
     * @param  ?string  $signatureOptionType  Indicate the Signature Type.<br>Valid Values:<ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.(This option is available for residential deliveries only)</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     * @param  ?SignatureOptionDetail  $signatureOptionDetail  These Signature option details.Required  if SignatureOptions is indicated.
     * @param  ?AlcoholDetail  $alcoholDetail  These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
     * @param  ?DangerousGoodsDetail  $dangerousGoodsDetail  Use this object to provide Dangerous Goods Detail in the shipment.
     * @param  ?int  $pieceCountVerificationBoxCount  Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     * @param  BatteryDetail[]|null  $batteryDetails  Indicates the battery details.
     * @param  ?string[]  $specialServiceTypes  Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     * @param  ?Weight  $dryIceWeight  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     */
    public function __construct(
        public readonly CodDetail $codDetail,
        public readonly ?string $signatureOptionType = null,
        public readonly ?SignatureOptionDetail $signatureOptionDetail = null,
        public readonly ?AlcoholDetail $alcoholDetail = null,
        public readonly ?DangerousGoodsDetail $dangerousGoodsDetail = null,
        public readonly ?int $pieceCountVerificationBoxCount = null,
        public readonly ?array $batteryDetails = null,
        public readonly ?array $specialServiceTypes = null,
        public readonly ?Weight $dryIceWeight = null,
    ) {
    }
}
