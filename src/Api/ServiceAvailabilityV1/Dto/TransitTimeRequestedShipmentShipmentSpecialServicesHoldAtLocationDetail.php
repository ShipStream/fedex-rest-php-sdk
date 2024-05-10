<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail extends Dto
{
    /**
     * @param  string  $locationId  This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <i><ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul></i>
     * @param  ?string  $locationType  Specify the Hold at location type.<br> Example: FEDEX_ONSITE
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress  $locationContactAndAddress  Specify the contact and address details of a location.
     */
    public function __construct(
        public readonly string $locationId,
        public readonly ?string $locationType = null,
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesHoldAtLocationDetailLocationContactAndAddress $locationContactAndAddress = null,
    ) {
    }
}
