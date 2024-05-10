<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDetail extends Dto
{
    protected static array $attributeMap = ['mapUrl' => 'mapURL'];

    protected static array $complexArrayTypes = [
        'storeHours' => [LocationHours::class],
        'carrierDetails' => [CarrierDetails::class],
    ];

    /**
     * @param  ?GeoPositionalCoordinates  $geoPositionalCoordinates  The ISO6709 GeographicCoordinates for a specific geographic location.
     * @param  LocationHours[]|null  $storeHours  Specifies the store hours.
     * @param  ?string  $locationId  The unique FedEx location identifier. <br>Example: HKAA
     * @param  ?string  $specialInstructions  Specifies the special instructions.
     * @param  ?string[]  $locationAttributeTypes  Specifies the location attribute type list.
     * @param  ?string  $mapUrl  Specifies the map URL.
     * @param  ?string  $locationType  Specifies the location type.
     * @param  ?ContactAndAddress  $contactAndAddress  Specify the contact and address details of a location.
     * @param  CarrierDetails[]|null  $carrierDetails  Specifies the carrierDetails.
     */
    public function __construct(
        public readonly ?GeoPositionalCoordinates $geoPositionalCoordinates = null,
        public readonly ?array $storeHours = null,
        public readonly ?string $locationId = null,
        public readonly ?string $specialInstructions = null,
        public readonly ?array $locationAttributeTypes = null,
        public readonly ?string $mapUrl = null,
        public readonly ?string $locationType = null,
        public readonly ?ContactAndAddress $contactAndAddress = null,
        public readonly ?array $carrierDetails = null,
    ) {
    }
}
