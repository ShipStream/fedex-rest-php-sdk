<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class InternationalControlledExportDetail extends Dto
{
    /**
     * @param  string  $type  Indicate International Controlled Export Type.
     */
    public function __construct(
        public readonly string $type,
    ) {
    }
}
