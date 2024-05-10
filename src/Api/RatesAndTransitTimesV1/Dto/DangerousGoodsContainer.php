<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class DangerousGoodsContainer extends Dto
{
    protected static array $complexArrayTypes = ['hazardousCommodities' => [HazardousCommodityContent::class]];

    /**
     * @param  ?string  $offeror  Specify the shipper name(offeror) or contact number. Required on all shipping papers.
     * @param  HazardousCommodityContent[]|null  $hazardousCommodities  Specify the kinds and quantities of all hazardous commodities in the current container.
     * @param  ?int  $numberOfContainers  Indicate the number of containers.
     * @param  ?string  $containerType  Indicate the type of container.
     * @param  ?PhoneNumber  $emergencyContactNumber  Indicates the telephone number to use for contact in the event of an emergency.
     * @param  ?HazardousCommodityPackagingDetail  $packaging  Identifies number and type of packaging units for hazardous commodities.
     * @param  ?string  $packingType  Indicate the packing type used.
     * @param  ?string  $radioactiveContainerClass  Indicate the packaging type of the container used to package the radioactive materials.
     */
    public function __construct(
        public readonly ?string $offeror = null,
        public readonly ?array $hazardousCommodities = null,
        public readonly ?int $numberOfContainers = null,
        public readonly ?string $containerType = null,
        public readonly ?PhoneNumber $emergencyContactNumber = null,
        public readonly ?HazardousCommodityPackagingDetail $packaging = null,
        public readonly ?string $packingType = null,
        public readonly ?string $radioactiveContainerClass = null,
    ) {
    }
}
