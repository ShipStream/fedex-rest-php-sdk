<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TimeRange extends Dto
{
    /**
     * @param  ?string  $begins  Field which holds the begin date/timestamp for a range.<br> Example: '2021-10-01T08:00:00'
     * @param  ?string  $ends  Field which holds the end date/timestamp for a range.<br> Example: '2021-10-15T00:00:00-06:00'
     */
    public function __construct(
        public readonly ?string $begins = null,
        public readonly ?string $ends = null,
    ) {
    }
}
