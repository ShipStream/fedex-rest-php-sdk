<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityPackagingDetail extends Dto
{
    /**
     * @param  ?int  $count  Indicate the number and type of packaging units for dangerous goods.
     * @param  ?string  $units  Specify the unit of the package.
     */
    public function __construct(
        public readonly ?int $count = null,
        public readonly ?string $units = null,
    ) {
    }
}
