<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedHazardousSummaryDetail extends Dto
{
    /**
     * @param  ?int  $smallQuantityExceptionPackageCount  Specifies the total number of packages containing hazardous commodities in small exceptions.<br>Example: 10
     */
    public function __construct(
        public readonly ?int $smallQuantityExceptionPackageCount = null,
    ) {
    }
}
