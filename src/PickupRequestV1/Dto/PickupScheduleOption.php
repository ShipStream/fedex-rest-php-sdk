<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupScheduleOption extends Dto
{
    /**
     * @param  ?string  $carrier  Specifies the FedEx transportation carrier for the pickup option.
     * @param  ?bool  $available  Indicates the availability of pickup option.If the value is true, it indicates the pickup option is available. If the value is false, it indicates pickup option is not available.
     * @param  ?string  $pickupDate  Indicates the date (in the pickup postal code's time zone)which refers to the pickup schedule option.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20
     * @param  ?string  $cutOffTime  Specifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. <br> Format:  HH:MM:SS <br> Example: 18:30:00
     * @param  ?Duration  $accessTime  This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30
     * @param  ?bool  $residentialAvailable  Indicates whether residential pickup is available for the requested postal code.
     * @param  ?string  $countryRelationship  Describes the country relationship among the shipments.DOMESTIC indicates intra-country shipping and cut off times.<br> INTERNATIONAL indicates inter-country shipping and cut off times.<br>Cut off times may vary for DOMESTIC and INTERNATIONAL.
     * @param  ?string  $scheduleDay  Indicates scheduled pickup day of the week.
     * @param  ?string  $defaultReadyTime  The default ready time for the shipment to be picked up. FedEx will assume the shipment is ready for pickup at this time unless otherwise indicated on the 'CreatePickup' Request. Format:HH:MM:SS <br> Example: 14:00:00
     * @param  ?string  $defaultLatestTimeOptions  The default latest time for the shipment to be picked up.<br>Format:HH:MM:SS <br> Example: 19:00:00
     * @param  ?string  $earlyCutOffTime  Identifies the early cut-off time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     * @param  ?Duration  $earlyAccessTime  This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30
     * @param  ?string  $earlyPickupLocationId  The location from where the package will be picked up <br> Example: PITA
     * @param  ?string[]  $readyTimeOptions  The ReadyTimeOptions indicates the possible ready time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 11:00:00, 11:30:00 <br>Note:Based on the cutOffTimes provided readyTimeOptions are returned.
     * @param  ?string[]  $latestTimeOptions  The LatestTimeOptions indicates the possible latest time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 12:00:00,12:30:00,13:00:00,13:30:00....23:59:00<br> Note:LatestTimeOptions are return till endoftheday timings.
     */
    public function __construct(
        public readonly ?string $carrier = null,
        public readonly ?bool $available = null,
        public readonly ?string $pickupDate = null,
        public readonly ?string $cutOffTime = null,
        public readonly ?Duration $accessTime = null,
        public readonly ?bool $residentialAvailable = null,
        public readonly ?string $countryRelationship = null,
        public readonly ?string $scheduleDay = null,
        public readonly ?string $defaultReadyTime = null,
        public readonly ?string $defaultLatestTimeOptions = null,
        public readonly ?string $earlyCutOffTime = null,
        public readonly ?Duration $earlyAccessTime = null,
        public readonly ?string $earlyPickupLocationId = null,
        public readonly ?array $readyTimeOptions = null,
        public readonly ?array $latestTimeOptions = null,
    ) {
    }
}
