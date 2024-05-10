<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentContent extends Dto
{
    /**
     * @param  ?string  $itemNumber  Field holds the item number for the contents of shipment. <br> Example: RZ5678
     * @param  ?string  $receivedQuantity  Field which holds information about the quantity received. <br> Example: 13
     * @param  ?string  $description  Field which holds informative description about shipment content. <br> Example:  pulyurethane rope
     * @param  ?string  $partNumber  Holds the part number of the content in shipment. <br> Example: RK1345
     */
    public function __construct(
        public readonly ?string $itemNumber = null,
        public readonly ?string $receivedQuantity = null,
        public readonly ?string $description = null,
        public readonly ?string $partNumber = null,
    ) {
    }
}
