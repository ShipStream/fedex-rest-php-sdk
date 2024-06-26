<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class HoldAtLocationDetail extends Dto
{
    /**
     * @param  string  $locationType  Type of facility at which package/shipment is to be held.<br> Example: FEDEX_ONSITE
     * @param  ?string  $locationId  This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <i><ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul></i>
     * @param  ?ContactAndAddress  $locationContactAndAddress  Specifies the contact and address details of a location.
     */
    public function __construct(
        public readonly string $locationType,
        public readonly ?string $locationId = null,
        public readonly ?ContactAndAddress $locationContactAndAddress = null,
    ) {
    }
}
