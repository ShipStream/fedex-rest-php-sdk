<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class DocTabContent extends Dto
{
    /**
     * @param  ?string  $docTabContentType  Doc Tab Content Type
     * @param  ?DocTabContentZone  $zone001
     * @param  ?DocTabContentBarcoded  $barcoded
     */
    public function __construct(
        public readonly ?string $docTabContentType = null,
        public readonly ?DocTabContentZone $zone001 = null,
        public readonly ?DocTabContentBarcoded $barcoded = null,
    ) {
    }
}
