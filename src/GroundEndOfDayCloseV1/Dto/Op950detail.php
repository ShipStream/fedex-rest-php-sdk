<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class Op950detail extends Dto
{
    /**
     * @param  ?Op950detailFormat  $format
     */
    public function __construct(
        public readonly ?Op950detailFormat $format = null,
    ) {
    }
}
