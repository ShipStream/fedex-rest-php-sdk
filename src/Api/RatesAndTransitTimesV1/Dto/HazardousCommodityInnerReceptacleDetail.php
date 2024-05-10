<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityInnerReceptacleDetail extends Dto
{
    /**
     * @param  ?HazardousCommodityQuantityDetail  $quantity  Specifies Hazardous Commodity Quantity Detail.
     */
    public function __construct(
        public readonly ?HazardousCommodityQuantityDetail $quantity = null,
    ) {
    }
}
