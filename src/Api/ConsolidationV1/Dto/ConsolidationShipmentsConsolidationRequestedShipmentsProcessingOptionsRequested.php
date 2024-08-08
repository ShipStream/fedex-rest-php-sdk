<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ConsolidationShipmentsConsolidationRequestedShipmentsProcessingOptionsRequested extends Dto
{
    /**
     * @param  ?string  $options
     */
    public function __construct(
        public readonly ?string $options = null,
    ) {
    }
}
