<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupDetail extends Dto
{
    /**
     * @param  string  $readyPickupDateTime  Specify the time and date the package will be ready for pickup.
     * @param  string  $latestPickupDateTime  Specify the last possible pickup date and time.
     */
    public function __construct(
        public readonly string $readyPickupDateTime,
        public readonly string $latestPickupDateTime,
    ) {
    }
}
