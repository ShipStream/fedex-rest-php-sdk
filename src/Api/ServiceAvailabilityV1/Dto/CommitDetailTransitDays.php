<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CommitDetailTransitDays extends Dto
{
    /**
     * @param  ?string  $description  Specifies the number of days the package/shipment is to be in transit.
     * @param  ?string  $minimumTransitTime  This is a code indicating the number of transit days available.
     * @param  ?string  $maximumTransitTime
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $minimumTransitTime = null,
        public readonly ?string $maximumTransitTime = null,
    ) {
    }
}
