<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class AssociatedFreightLineItemDetail extends Dto
{
    /**
     * @param  string  $id  identifier for the freight line item
     */
    public function __construct(
        public readonly string $id,
    ) {
    }
}
