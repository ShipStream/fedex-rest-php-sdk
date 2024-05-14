<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LiabilityCoverageDetail extends Dto
{
    /**
     * @param  ?string  $coverageType  This is the liability coverage type.
     * @param  ?Money  $coverageAmount  Specifies taxes or miscellaneous charge.
     */
    public function __construct(
        public readonly ?string $coverageType = null,
        public readonly ?Money $coverageAmount = null,
    ) {
    }
}
