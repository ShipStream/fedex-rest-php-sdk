<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight1 extends Dto
{
    /**
     * @param  ?string  $units  Specify the unit of measurement used to weigh the shipment. The package and commodity weight unit should be the same else the request will result in an error.
     * @param  ?float  $value  Specify the value of weight of shipment.<br>Example: 68.25
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
