<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityContent001 extends Dto
{
    protected static array $complexArrayTypes = ['innerReceptacles' => [HazardousCommodityInnerReceptacleDetail01::class]];

    /**
     * @param  ?HazardousCommodityQuantityDetail  $quantity  Specify the Hazardous commodity quantity details.
     * @param  HazardousCommodityInnerReceptacleDetail01[]|null  $innerReceptacles  Specifies the inner receptacles within the container.
     * @param  ?HazardousCommodityOptionDetail01  $options  Indicates details of hazardous commodity option detail.
     * @param  ?HazardousCommodityDescription01  $description  Required<br>Details of hazardous commodity description.
     */
    public function __construct(
        public readonly ?HazardousCommodityQuantityDetail $quantity = null,
        public readonly ?array $innerReceptacles = null,
        public readonly ?HazardousCommodityOptionDetail01 $options = null,
        public readonly ?HazardousCommodityDescription01 $description = null,
    ) {
    }
}
