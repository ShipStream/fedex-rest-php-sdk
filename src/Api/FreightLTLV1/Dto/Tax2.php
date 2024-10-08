<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Tax2 extends Dto
{
    /**
     * @param  ?float  $amount  Indicates the amount of tax.<br>Example: 10.0
     * @param  ?string  $level  Indicates the level of tax.
     * @param  ?string  $description  Specifies the tax description.
     * @param  ?string  $type  Specifies the type of the tax.
     */
    public function __construct(
        public ?float $amount = null,
        public ?string $level = null,
        public ?string $description = null,
        public ?string $type = null,
    ) {}
}
