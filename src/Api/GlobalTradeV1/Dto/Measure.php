<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class Measure extends Dto
{
    /**
     * @param  string  $uom  Unit of measure used to express the quantity of this commodity line item.
     * @param  float  $quantity  Specify commodity quantity.
     */
    public function __construct(
        public readonly string $uom,
        public readonly float $quantity,
    ) {
    }
}
