<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RetrieveDateRange extends Dto
{
    /**
     * @param  ?string  $begins  Indicates the start date.<br>Example: 12-01-2020
     * @param  ?string  $ends  Indicates the end date.<br>Example: 12-01-2020
     */
    public function __construct(
        public readonly ?string $begins = null,
        public readonly ?string $ends = null,
    ) {
    }
}
