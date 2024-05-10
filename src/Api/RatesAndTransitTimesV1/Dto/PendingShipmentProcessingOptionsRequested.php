<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class PendingShipmentProcessingOptionsRequested extends Dto
{
    /**
     * @param  ?string[]  $options  Specify the special handling requested for the package.<br> Example: BATTERY
     */
    public function __construct(
        public readonly ?array $options = null,
    ) {
    }
}
