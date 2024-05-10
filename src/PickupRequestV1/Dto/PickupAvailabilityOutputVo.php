<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupAvailabilityOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['options' => [PickupScheduleOption::class], 'alerts' => [Alert::class]];

    /**
     * @param  ?string  $requestTimestamp  The time when the PickupAvailability request was processed.<br>Note:<br>1.The date format must be YYYY-MM-DDTHH:MM:SS.<br> 2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code<br> 5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     * @param  PickupScheduleOption[]|null  $options  The pickup schedule details, such as the carrier, latest available time of pickup, default latest available time, availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, and driver's access to pick up the package.
     * @param  Alert[]|null  $alerts  These are optional alerts received when a Create pickup is requested. This includes an alert code, type, and message.
     */
    public function __construct(
        public readonly ?string $requestTimestamp = null,
        public readonly ?array $options = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
