<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class Op950detailFormatTopOfPageOffset extends Dto
{
    /**
     * @param  ?string  $value  The numeric quantity of this measurement.
     * @param  ?string  $units  The units for this measurement.
     */
    public function __construct(
        public readonly ?string $value = null,
        public readonly ?string $units = null,
    ) {
    }
}
