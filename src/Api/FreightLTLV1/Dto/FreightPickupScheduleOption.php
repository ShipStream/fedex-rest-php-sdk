<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightPickupScheduleOption extends Dto
{
    /**
     * @param  ?string  $carrier  Specifies the FedEx transportation carrier for this pickup option.
     * @param  ?bool  $available  Returns true indicates this pickup option is available and false indicates pickup option is not available.
     * @param  ?string  $pickupDate  Identifies the date (in the pickup postal code's time zone) to which this pickup schedule option refers.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20
     * @param  ?string  $cutOffTime  Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     * @param  ?Duration  $accessTime  This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30
     * @param  ?bool  $residentialAvailable  Indicates whether residential pickup is available for the requested postal code.
     * @param  ?string  $scheduleDay  Indicates the scheduled day.
     */
    public function __construct(
        public readonly ?string $carrier = null,
        public readonly ?bool $available = null,
        public readonly ?string $pickupDate = null,
        public readonly ?string $cutOffTime = null,
        public readonly ?Duration $accessTime = null,
        public readonly ?bool $residentialAvailable = null,
        public readonly ?string $scheduleDay = null,
    ) {
    }
}
