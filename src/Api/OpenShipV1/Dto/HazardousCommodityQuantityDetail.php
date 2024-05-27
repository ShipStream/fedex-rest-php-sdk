<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityQuantityDetail extends Dto
{
    /**
     * @param  string  $quantityType  Specifies which measure of quantity is to be validated.
     * @param  float  $amount  Number of units of the type below.<br>Example: 34.56
     * @param  ?string  $units  Specifies the units.<br>Example: KG
     */
    public function __construct(
        public readonly string $quantityType,
        public readonly float $amount,
        public readonly ?string $units = null,
    ) {
    }
}
