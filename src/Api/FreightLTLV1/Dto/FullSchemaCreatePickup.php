<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCreatePickup extends Dto
{
    protected static array $complexArrayTypes = ['totalWeight' => [Weight::class]];

    /**
     * @param  PartyAccountNumber  $associatedAccountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     * @param  PickupOriginDetailLtl  $originDetail  Pickup Origin Detail
     * @param  Weight[]|null  $totalWeight  The total weight of the packages for the pickup. Unit of measure is LB and KG.
     * @param  ?int  $packageCount  The total number of packages for the pickup.<br> Example: 5
     * @param  ?string  $remarks  This is a placeholder for any message to be passed to the FedEx pickup. courier.<br> Example: Please ring bell at loading dock.
     * @param  ?string  $countryRelationships  Describes the country relationship among the shipments being picked up.<br>'DOMESTIC' indicates intra-country shipping; origin and destination country are the same.<br>'INTERNATIONAL' indicates inter-country shipping; origin and destination countries are different.<br>Not applicable for FedEx Ground shipments<br>Example: DOMESTIC
     * @param  ?string  $trackingNumber  This is a tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: XXXX0365XXXX
     * @param  ?string  $commodityDescription  Description of the commodity being shipped. <br>Example:This field contains CommodityDescription
     * @param  ?int  $oversizePackageCount  The number of oversize packages that are tendered to FedEx Ground.
     * @param  ?PickupNotificationDetail  $pickupNotificationDetail
     */
    public function __construct(
        public readonly PartyAccountNumber $associatedAccountNumber,
        public readonly PickupOriginDetailLtl $originDetail,
        public readonly FreightPickupDetail $freightPickupDetail,
        public readonly ?array $totalWeight = null,
        public readonly ?int $packageCount = null,
        public readonly ?string $remarks = null,
        public readonly ?string $countryRelationships = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $commodityDescription = null,
        public readonly ?int $oversizePackageCount = null,
        public readonly ?PickupNotificationDetail $pickupNotificationDetail = null,
    ) {
    }
}
