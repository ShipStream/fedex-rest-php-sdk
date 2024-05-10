<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LiabilityCoverageDetail extends Dto
{
    /**
     * @param  ?string  $coverageType  This is the liability coverage type.
     * @param  ?mixed[]  $coverageAmount  Indicate the coverage amount.
     */
    public function __construct(
        public readonly ?string $coverageType = null,
        public readonly ?array $coverageAmount = null,
    ) {
    }
}
