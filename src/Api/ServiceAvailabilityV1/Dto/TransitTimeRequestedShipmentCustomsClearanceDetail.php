<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentCustomsClearanceDetail extends Dto
{
    protected static array $complexArrayTypes = ['commodities' => [TransitTimeCommodity::class]];

    /**
     * @param  TransitTimeCommodity[]  $commodities  Specify the commodity details.
     */
    public function __construct(
        public readonly array $commodities,
    ) {
    }
}
