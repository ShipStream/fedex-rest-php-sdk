<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCreatePickup extends Dto
{
    /**
     * @param  mixed[]  $associatedAccountNumber  The associated account number, which is  invoiced for the freight pickup.
     * @param  string  $originDetail  The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     * @param  mixed[]  $freightPickupDetail  This provides the Freight LTL pickup detailed information.
     * @param  ?string[]  $totalWeight  The total weight of the packages for the pickup. Unit of measure is LB and KG.
     * @param  ?int  $packageCount  The total number of packages for the pickup.<br> Example: 5
     * @param  ?string  $remarks  This is a placeholder for any message to be passed to the FedEx pickup. courier.<br> Example: Please ring bell at loading dock.
     * @param  ?string  $countryRelationships  Describes the country relationship among the shipments being picked up.<br>'DOMESTIC' indicates intra-country shipping; origin and destination country are the same.<br>'INTERNATIONAL' indicates inter-country shipping; origin and destination countries are different.<br>Not applicable for FedEx Ground shipments<br>Example: DOMESTIC
     * @param  ?string  $trackingNumber  This is a tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: XXXX0365XXXX
     * @param  ?string  $commodityDescription  Description of the commodity being shipped. <br>Example:This field contains CommodityDescription
     * @param  ?int  $oversizePackageCount  The number of oversize packages that are tendered to FedEx Ground.
     * @param  ?string  $pickupNotificationDetail
     */
    public function __construct(
        public readonly array $associatedAccountNumber,
        public readonly string $originDetail,
        public readonly array $freightPickupDetail,
        public readonly ?array $totalWeight = null,
        public readonly ?int $packageCount = null,
        public readonly ?string $remarks = null,
        public readonly ?string $countryRelationships = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $commodityDescription = null,
        public readonly ?int $oversizePackageCount = null,
        public readonly ?string $pickupNotificationDetail = null,
    ) {
    }
}
