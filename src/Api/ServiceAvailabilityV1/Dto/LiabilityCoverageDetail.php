<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class LiabilityCoverageDetail extends Dto
{
    /**
     * @param  ?string  $coverageType  Optional
     *                                 This is the liability coverage type.
     * @param  ?mixed[]  $coverageAmount  Specifies the Liability Coverage Amount & Currency used for Freight Shipment.
     */
    public function __construct(
        public readonly ?string $coverageType = null,
        public readonly ?array $coverageAmount = null,
    ) {
    }
}
