<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingDateAndTime extends Dto
{
    /**
     * @param  ?string  $dateTime  Field which holds the tracking date or timestamp in ISO format.<br>Format: YYYY-MM-DD<br> Example: '2019-05-07'
     * @param  ?string  $type  Field which holds information about the type of tracking date or timestamp.<br> Example: 'ACTUAL_DELIVERY'
     */
    public function __construct(
        public readonly ?string $dateTime = null,
        public readonly ?string $type = null,
    ) {
    }
}
