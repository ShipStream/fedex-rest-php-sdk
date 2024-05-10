<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class TimeRange extends Dto
{
    /**
     * @param  ?string  $begins  Specifies the start time.
     * @param  ?string  $ends  Specifies the end time.
     */
    public function __construct(
        public readonly ?string $begins = null,
        public readonly ?string $ends = null,
    ) {
    }
}
