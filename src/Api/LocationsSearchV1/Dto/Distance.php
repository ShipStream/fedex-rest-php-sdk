<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class Distance extends Dto
{
    /**
     * @param  ?string  $units  Indicates the unit of measure for the distance.
     * @param  ?float  $value  Specifies the distance value.<br>Example: 3.5
     */
    public function __construct(
        public ?string $units = null,
        public ?float $value = null,
    ) {}
}
