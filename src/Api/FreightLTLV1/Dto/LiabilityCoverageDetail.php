<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LiabilityCoverageDetail extends Dto
{
    /**
     * @param  ?string  $coverageType  This is the liability coverage type.
     * @param  ?Money  $coverageAmount  Specifies taxes or miscellaneous charge.
     */
    public function __construct(
        public ?string $coverageType = null,
        public ?Money $coverageAmount = null,
    ) {}
}
