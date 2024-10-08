<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaFreightPickupAvailability extends Dto
{
    /**
     * @param  AddressAvailability  $pickupAddress  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?string  $packageReadyTime  The time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.
     * @param  ?string  $customerCloseTime  The latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.
     * @param  ?PickupShipmentAttributes  $shipmentAttributes  Indicates the optional attributes for the shipment related to the pickup inquiry.
     * @param  ?string  $dispatchDate  Indicates the date, the package is to be picked up. The format is YYYY-MM-DD. If the field is left blank, the system considers current date as dispatch date.
     * @param  ?int  $numberOfBusinessDays  Number of business days to consider when checking availability.<br>For example if you are indicating pickupDate as Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     */
    public function __construct(
        public AddressAvailability $pickupAddress,
        public ?string $packageReadyTime = null,
        public ?string $customerCloseTime = null,
        public ?PickupShipmentAttributes $shipmentAttributes = null,
        public ?FullSchemaFreightPickupAvailabilityFreightPickupSpecialServiceDetail $freightPickupSpecialServiceDetail = null,
        public ?string $dispatchDate = null,
        public ?int $numberOfBusinessDays = null,
    ) {}
}
