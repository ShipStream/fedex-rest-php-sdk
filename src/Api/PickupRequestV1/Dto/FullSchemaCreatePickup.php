<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCreatePickup extends Dto
{
    /**
     * @param  AccountNumber  $associatedAccountNumber  This is the FedEx account number. <br>Example: Your account number
     * @param  string  $originDetail  The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     * @param  string  $carrierCode  Specify the four letter code of a FedEx operating company that meets your requirements.<br> Examples of FedEx Operating Comapnies are :  <ul><li>FDXE- FedEx Express</li><li>FDXG- FedEx Ground</li>
     * @param  ?string  $associatedAccountNumberType  This enumeration represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br> Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     * @param  ?mixed[]  $totalWeight  Specify The total weight of the packages for the pickup. Unit of measure is
     *                                 LB.
     * @param  ?int  $packageCount  Specify the total number of packages for the pickup.<br> Example: 5
     * @param  ?mixed[]  $accountAddressOfRecord  The city name, state or province code and the address classification associated with the customer account which requested the pickup.
     * @param  ?string  $remarks  Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     * @param  ?string  $countryRelationships  Describes the country relationship among the shipments being picked up. This element is not mandatory for this request, but when added, the mandatory values are DOMESTIC or INTERNATIONAL. Empty or incorrect values will result in to errors.
     * @param  ?string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i> <br>Example: ON_CALL, PACKAGE_RETURN_PROGRAM, REGULAR_STOP <br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  ?string  $trackingNumber  This is a Tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: 795803657326<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     * @param  ?string  $commodityDescription  Description of the commodity being shipped. <br>Example:This field contains Commodity Description.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     * @param  ?mixed[]  $expressFreightDetail  Placeholder for Express Freight pickup details.
     * @param  ?int  $oversizePackageCount  Specify the number of oversize packages that are tendered to FedEx Ground.
     * @param  ?string  $pickupNotificationDetail
     */
    public function __construct(
        public readonly AccountNumber $associatedAccountNumber,
        public readonly string $originDetail,
        public readonly string $carrierCode,
        public readonly ?string $associatedAccountNumberType = null,
        public readonly ?array $totalWeight = null,
        public readonly ?int $packageCount = null,
        public readonly ?array $accountAddressOfRecord = null,
        public readonly ?string $remarks = null,
        public readonly ?string $countryRelationships = null,
        public readonly ?string $pickupType = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $commodityDescription = null,
        public readonly ?array $expressFreightDetail = null,
        public readonly ?int $oversizePackageCount = null,
        public readonly ?string $pickupNotificationDetail = null,
    ) {
    }
}
