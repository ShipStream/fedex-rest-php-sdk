<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class Duration extends Dto
{
    /**
     * @param  ?int  $hours  This is the minimum time window in hours that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     * @param  ?int  $minutes  This is the minimum time window in minutes that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     */
    public function __construct(
        public readonly ?int $hours = null,
        public readonly ?int $minutes = null,
    ) {
    }
}
