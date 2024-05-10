<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ContentRecord extends Dto
{
    /**
     * @param  ?string  $itemNumber  Specifies Item Number.
     * @param  ?int  $receivedQuantity  Specifies Received Quantity.
     * @param  ?string  $description  Specifies description for the content record.
     * @param  ?string  $partNumber  Specifies Part Number.
     */
    public function __construct(
        public readonly ?string $itemNumber = null,
        public readonly ?int $receivedQuantity = null,
        public readonly ?string $description = null,
        public readonly ?string $partNumber = null,
    ) {
    }
}
