<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceDetail extends Dto
{
    /**
     * @param  ?Weight12  $totalWeight  These are the weight details.
     * @param  ?int  $packageCount  This is package count.<br>Example: 12
     */
    public function __construct(
        public readonly ?Weight12 $totalWeight = null,
        public readonly ?int $packageCount = null,
    ) {
    }
}
