<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class SubPackageInfo extends Dto
{
    /**
     * @param  ?string  $dimension  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?string  $description  The description of the SubPackage Type
     */
    public function __construct(
        public ?string $dimension = null,
        public ?string $description = null,
    ) {}
}
