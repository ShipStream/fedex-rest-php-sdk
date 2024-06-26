<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class DelayDetail extends Dto
{
    /**
     * @param  ?string  $date  delay date.  format [YYYY-MM-DD]
     * @param  ?string  $dayOfWeek  The delay day of the week
     * @param  ?string  $level  The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling)
     * @param  ?string  $point  The point in transit where the delay is occurring (e.g. Origin, Destination, Broker location)
     * @param  ?string  $type  The reason for the delay (e.g. holiday, weekend, etc.).
     * @param  ?string  $description  The name of the holiday in that country that is causing the delay.
     */
    public function __construct(
        public readonly ?string $date = null,
        public readonly ?string $dayOfWeek = null,
        public readonly ?string $level = null,
        public readonly ?string $point = null,
        public readonly ?string $type = null,
        public readonly ?string $description = null,
    ) {
    }
}
