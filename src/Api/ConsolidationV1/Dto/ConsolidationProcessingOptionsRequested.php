<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ConsolidationProcessingOptionsRequested extends Dto
{
    /**
     * @param  ?string[]  $options  Specifies the options for precessing options. This is mandatory for International Ground Distribution.<br>Example: REQUIRE_PRE_EPIC_BARCODE
     */
    public function __construct(
        public ?array $options = null,
    ) {}
}