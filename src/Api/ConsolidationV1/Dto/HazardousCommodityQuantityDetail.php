<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityQuantityDetail extends Dto
{
    /**
     * @param  string  $quantityType  Specifies which measure of quantity is to be validated.
     * @param  float  $amount  Number of units of the type below.
     * @param  ?string  $units  specifies the units.
     */
    public function __construct(
        public string $quantityType,
        public float $amount,
        public ?string $units = null,
    ) {}
}