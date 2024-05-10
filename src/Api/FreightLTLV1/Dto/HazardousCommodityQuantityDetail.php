<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityQuantityDetail extends Dto
{
    /**
     * @param  string  $quantityType  Indicate the measure of units quantity to be validated.
     * @param  float  $amount  Indicate the amount of the commodity in alternate units.<br>Example: 24.56
     * @param  ?string  $units  Indicate the unit of measure.<br>Example: KG
     */
    public function __construct(
        public readonly string $quantityType,
        public readonly float $amount,
        public readonly ?string $units = null,
    ) {
    }
}
