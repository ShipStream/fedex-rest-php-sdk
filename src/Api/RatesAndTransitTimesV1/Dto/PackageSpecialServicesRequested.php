<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageSpecialServicesRequested extends Dto
{
    protected static array $attributeMap = ['packageCodDetail' => 'packageCODDetail'];

    protected static array $complexArrayTypes = ['batteryDetails' => [BatteryClassificationDetail::class]];

    /**
     * @param  ?string[]  $specialServiceTypes  Indicate the special services  requested.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     * @param  ?string  $signatureOptionType  Type of a Signature Option.
     * @param  ?AlcoholDetail  $alcoholDetail  Indicate the alcohol shipment details. This object is mandatory if alcohol special service is selected.
     * @param  ?DangerousGoodsDetail  $dangerousGoodsDetail  Use this object to specify Dangerous Goods shipment Detail.
     * @param  ?PackageCodDetail  $packageCodDetail  Indicates package COD Detail.  COD main information is set in shipment level.
     * @param  ?int  $pieceCountVerificationBoxCount  Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     * @param  BatteryClassificationDetail[]|null  $batteryDetails  Specify the details about the batteries or cells that are contained within this specific package.
     * @param  ?Weight  $dryIceWeight  These are the weight details.
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
        public readonly ?string $signatureOptionType = null,
        public readonly ?AlcoholDetail $alcoholDetail = null,
        public readonly ?DangerousGoodsDetail $dangerousGoodsDetail = null,
        public readonly ?PackageCodDetail $packageCodDetail = null,
        public readonly ?int $pieceCountVerificationBoxCount = null,
        public readonly ?array $batteryDetails = null,
        public readonly ?Weight $dryIceWeight = null,
    ) {
    }
}
