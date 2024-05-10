<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RetrieveDateRange extends Dto
{
    /**
     * @param  ?string  $begins  Indicates the start date.
     * @param  ?string  $ends  Indicates the end date.
     */
    public function __construct(
        public readonly ?string $begins = null,
        public readonly ?string $ends = null,
    ) {
    }
}
