<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipper extends Dto
{
    /**
     * @param  mixed[]  $address
     */
    public function __construct(
        public readonly array $address,
    ) {
    }
}
