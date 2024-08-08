<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryLabelContentDetail extends Dto
{
    /**
     * @param  ?string  $generationOptions  Specifies how to print the regulatory label in relation to the main shipping label.
     * @param  ?string  $type  Regulatory Label Type
     */
    public function __construct(
        public readonly ?string $generationOptions = null,
        public readonly ?string $type = null,
    ) {
    }
}
