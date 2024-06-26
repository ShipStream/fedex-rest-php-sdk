<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServicesRequestedReturnShipmentDetail extends Dto
{
    /**
     * @param  ?string  $returnType  The type of return shipment being requested.
     */
    public function __construct(
        public readonly ?string $returnType = null,
    ) {
    }
}
