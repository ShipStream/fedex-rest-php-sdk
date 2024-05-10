<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitDays extends Dto
{
    /**
     * @param  ?string  $description  Indicates the number of days the package/shipment is to be in transit.
     * @param  ?string  $minimumTransitTime  This is the code indicating the number of transit days.
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $minimumTransitTime = null,
    ) {
    }
}
