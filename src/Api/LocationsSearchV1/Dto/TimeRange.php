<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class TimeRange extends Dto
{
    /**
     * @param  ?string  $begins  Start time. <br> Example: 20:00:00
     * @param  ?string  $ends  End time. <br> Example: 20:00:00
     */
    public function __construct(
        public readonly ?string $begins = null,
        public readonly ?string $ends = null,
    ) {
    }
}
