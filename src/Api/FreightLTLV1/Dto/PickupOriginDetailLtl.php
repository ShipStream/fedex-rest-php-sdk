<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupOriginDetailLtl extends Dto
{
    /**
     * @param  PartyCreatePickupLtl  $pickupLocation  Indicates attributes for a Party to perform a transaction including the physical address, contact information and account number information.
     * @param  string  $readyDateTimestamp  Indicates the date and time when the freight shipment/package is ready for pick up.<br>Format: [YYYY-MM-DDTHH:MM:SSZ]<br>Example: 2020-04-02T11:00:00Z<br>Note:<br>1.The date format must be YYYY-MM-DDTHH:MM:SS.<br>2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code.<br>5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     * @param  string  $customerCloseTime  Indicates the latest local time at which the driver can gain access to pickup the package(s).<br>Format: HH:MM:SS. <br>Example: 18:00:00<br> Note:<br> 1.The time must be in the format: HH:MM:SS using a 24-hour clock.<br> 2.The time is local to the pickup postal code.<br> 3.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     * @param  ?string  $pickupAddressType  Indicates the type of pickup address being used whether it is account address, shipper address or alternate address. <br><br>Note: <ul><li>The default value is OTHER.</li><li> If the value is set to ACCOUNT, then the account address will be used for pickup and the pickupLocation details are not required.</li></ul>
     * @param  ?string  $pickupDateType  Indicates whether the pickup request is for the same day or on a future date.
     * @param  ?string  $packageLocation  Specify a location description from where the courier/driver must pick up the package. It is mandatory for Ground Pickup.<br> Example: FRONT
     * @param  ?string  $buildingPart  Specify the building type.
     * @param  ?string  $buildingPartDescription  Indicates the building part such as floor suite or apartment number or an identifier of the building.<br>Example: 111
     * @param  ?bool  $earlyPickup  Specify if it is an early pickup. This applies only to Europe.
     * @param  ?string  $suppliesRequested  Specify if any shipping supplies are requested at the pickup origin required to pack the shipment such as FedEx Box, Large Box, FedEx Tube.<br> Example: Supplies requested by customer
     * @param  ?string  $geographicalPostalCode  This is the alternate postal code associated with pickup location. (Applicable only for European pickups)
     */
    public function __construct(
        public readonly PartyCreatePickupLtl $pickupLocation,
        public readonly string $readyDateTimestamp,
        public readonly string $customerCloseTime,
        public readonly ?string $pickupAddressType = null,
        public readonly ?string $pickupDateType = null,
        public readonly ?string $packageLocation = null,
        public readonly ?string $buildingPart = null,
        public readonly ?string $buildingPartDescription = null,
        public readonly ?bool $earlyPickup = null,
        public readonly ?string $suppliesRequested = null,
        public readonly ?string $geographicalPostalCode = null,
    ) {
    }
}
