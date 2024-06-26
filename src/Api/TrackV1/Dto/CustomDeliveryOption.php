<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomDeliveryOption extends Dto
{
    /**
     * @param  ?RequestedAppointmentDetail  $requestedAppointmentDetail  Field which specifies the details of the requested appointment.
     * @param  ?string  $description  Field which specifies the description of the custom delivery option requested <br> Example: Redirect the package to the hold location.
     * @param  ?string  $type  Field which specifies the type of the custom delivery option requested.<br> Example: REDIRECT_TO_HOLD_AT_LOCATION
     * @param  ?string  $status  Field which specifies the status of the custom delivery option requested.<br> Example: HELD
     */
    public function __construct(
        public readonly ?RequestedAppointmentDetail $requestedAppointmentDetail = null,
        public readonly ?string $description = null,
        public readonly ?string $type = null,
        public readonly ?string $status = null,
    ) {
    }
}
