<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class LiabilityCoverageDetail extends Dto
{
    /**
     * @param  ?string  $coverageType  Optional
     *                                 This is the liability coverage type.
     * @param  ?Money  $coverageAmount  Optional, but if indicated 'amount' and 'currency' must be provided.
     */
    public function __construct(
        public readonly ?string $coverageType = null,
        public readonly ?Money $coverageAmount = null,
    ) {
    }
}
