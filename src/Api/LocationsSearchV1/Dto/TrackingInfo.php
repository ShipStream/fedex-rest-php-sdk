<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingInfo extends Dto
{
    /**
     * @param  ?string  $uniqueTrackingId  A unique tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br> Example: 012345678912
     * @param  ?string  $trackingNumber  A tracking number identifying a shipment. Used to return locations that are relevant to the shipment.<br>Example: 123456789012
     * @param  ?string  $shipDate  The date of shipment.<br> Example: 2019-10-13
     */
    public function __construct(
        public readonly ?string $uniqueTrackingId = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $shipDate = null,
    ) {
    }
}
