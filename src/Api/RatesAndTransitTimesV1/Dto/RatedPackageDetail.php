<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RatedPackageDetail extends Dto
{
    /**
     * @param  ?float  $effectiveNetDiscount  This is the  list net charge minus actual net charge.<br> Example: 1.0
     * @param  ?PackageRateDetail  $packageRateDetail  Data for a package's rates, as calculated per a specific rate type.
     * @param  ?int  $groupNumber  This is group number, used only with package groups as a unique identifier of each group of identical packages.
     */
    public function __construct(
        public ?float $effectiveNetDiscount = null,
        public ?PackageRateDetail $packageRateDetail = null,
        public ?int $groupNumber = null,
    ) {}
}
