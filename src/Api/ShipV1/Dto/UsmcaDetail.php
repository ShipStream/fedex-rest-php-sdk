<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class UsmcaDetail extends Dto
{
    /**
     * @param  ?string  $originCriterion  Specify the origin criterion.
     */
    public function __construct(
        public readonly ?string $originCriterion = null,
    ) {
    }
}
