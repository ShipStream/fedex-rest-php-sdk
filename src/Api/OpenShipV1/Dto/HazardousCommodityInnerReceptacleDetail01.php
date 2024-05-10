<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityInnerReceptacleDetail01 extends Dto
{
    /**
     * @param  ?HazardousCommodityQuantityDetail002  $quantity  Indicates the Hazardous Commodity Quantity Detail.
     */
    public function __construct(
        public readonly ?HazardousCommodityQuantityDetail002 $quantity = null,
    ) {
    }
}
