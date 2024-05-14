<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ContentRecord extends Dto
{
    /**
     * @param  ?string  $itemNumber  This is a package item number.
     * @param  ?int  $receivedQuantity  This is the package item quantity.
     * @param  ?string  $description  This is the description of the package item.
     * @param  ?string  $partNumber  This is the part number.
     */
    public function __construct(
        public readonly ?string $itemNumber = null,
        public readonly ?int $receivedQuantity = null,
        public readonly ?string $description = null,
        public readonly ?string $partNumber = null,
    ) {
    }
}
