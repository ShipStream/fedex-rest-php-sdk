<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HoldAtLocationDetail extends Dto
{
    /**
     * @param  string  $locationId  This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul>
     * @param  ?ContactAndAddress  $locationContactAndAddress  Specifies the contact and address details of a location.
     * @param  ?string  $locationType  Specifies the type of facility at which package/shipment is to be held.
     */
    public function __construct(
        public readonly string $locationId,
        public readonly ?ContactAndAddress $locationContactAndAddress = null,
        public readonly ?string $locationType = null,
    ) {
    }
}
