<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Surcharge extends Dto
{
    /**
     * @param  ?float  $amount  Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     * @param  ?string  $level  Specifies the level of surcharge.
     * @param  ?string  $name  Specifies the localized name of the surcharge.
     * @param  ?string  $description  Specifies the description of the surcharge.
     * @param  ?string  $type  Specifies the type of surcharge.
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $level = null,
        public readonly ?string $name = null,
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
