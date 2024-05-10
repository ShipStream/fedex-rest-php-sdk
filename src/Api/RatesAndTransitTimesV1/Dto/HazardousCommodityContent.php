<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityContent extends Dto
{
    protected static array $complexArrayTypes = ['innerReceptacles' => [HazardousCommodityInnerReceptacleDetail::class]];

    /**
     * @param  ?HazardousCommodityQuantityDetail  $quantity  Specifies Hazardous Commodity Quantity Detail.
     * @param  HazardousCommodityInnerReceptacleDetail[]|null  $innerReceptacles  Specifies the inner receptacles within the container.
     * @param  ?HazardousCommodityOptionDetail  $options  Customer-provided specifications for handling individual commodities.
     * @param  ?HazardousCommodityDescription  $description  Identifies and describes an individual hazardous commodity.
     */
    public function __construct(
        public readonly ?HazardousCommodityQuantityDetail $quantity = null,
        public readonly ?array $innerReceptacles = null,
        public readonly ?HazardousCommodityOptionDetail $options = null,
        public readonly ?HazardousCommodityDescription $description = null,
    ) {
    }
}
