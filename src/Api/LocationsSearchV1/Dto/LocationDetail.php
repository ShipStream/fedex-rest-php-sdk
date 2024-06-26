<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'storeHours' => [LocationHours::class],
        'carrierDetailList' => [FastCarrierDetails::class],
    ];

    /**
     * @param  ?Distance  $distance  Specifies value and unit of distance between the FedEx locations and the address specified.<br>Example: 2 KM
     * @param  ?ContactAndAddress  $contactAndAddress  The contact and address information for a location.
     * @param  ?string  $locationId  This is the FedEx location id for the given location.<br> Example:DXBA
     * @param  LocationHours[]|null  $storeHours  Includes the days and times specific to the location
     * @param  FastCarrierDetails[]|null  $carrierDetailList  List of FedEx Operating companies (FedEx Carriers) along with different service capabilities available with the location.
     * @param  ?GeoPositionalCoordinates  $geoPositionalCoordinates  The ISO6709GeographicCoordinates for a specific geographic location
     * @param  ?string  $locationType  The FedEx Location Type.
     * @param  ?string[]  $locationAttributeTypes  Attributes for the location.
     * @param  ?bool  $lockerAvailability  Indicates if FedEx locker is available at the location.<br> Valid values: True, False.
     * @param  ?PackageAttribute  $packageMaximumLimits
     * @param  ?string  $specialInstructions  Indicates the special instructions needed to access a location.
     * @param  ?string  $rthservice  Indicates if the location supports RedirectToHold Service.
     * @param  ?LocationCapabilities  $locationCapabilities  Location capabilities such as services, day of week, ability to dropoff, pickup shipments, ability to hold shipments for pickup, etc.
     */
    public function __construct(
        public readonly ?Distance $distance = null,
        public readonly ?ContactAndAddress $contactAndAddress = null,
        public readonly ?string $locationId = null,
        public readonly ?array $storeHours = null,
        public readonly ?array $carrierDetailList = null,
        public readonly ?GeoPositionalCoordinates $geoPositionalCoordinates = null,
        public readonly ?string $locationType = null,
        public readonly ?array $locationAttributeTypes = null,
        public readonly ?bool $lockerAvailability = null,
        public readonly ?PackageAttribute $packageMaximumLimits = null,
        public readonly ?string $specialInstructions = null,
        public readonly ?string $rthservice = null,
        public readonly ?LocationCapabilities $locationCapabilities = null,
    ) {
    }
}
