<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class AssociatedFreightLineItemDetail2 extends Dto
{
    /**
     * @param  string  $id  A freight line item identifier referring to a freight shipment line item that describes goods contained within this handling unit.
     */
    public function __construct(
        public readonly string $id,
    ) {
    }
}
