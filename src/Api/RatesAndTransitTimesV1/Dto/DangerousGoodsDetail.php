<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class DangerousGoodsDetail extends Dto
{
    protected static array $complexArrayTypes = ['containers' => [DangerousGoodsContainer::class]];

    /**
     * @param  ?string  $offeror  Indicate the Offeror's name or contract number, per DOT regulation.<br>Example: John Smith
     * @param  ?string  $accessibility  Indicate the Dangerous Goods Accessibility Type.<br> Inaccessible means it does not have to be accessible on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     * @param  ?string  $emergencyContactNumber  Indicate the emergency telephone/contact number.
     * @param  ?string[]  $options  Specify the special handling requested for the package.<br> Example: BATTERY
     * @param  DangerousGoodsContainer[]|null  $containers  Indicate one or more containers used to pack dangerous goods commodities.
     * @param  ?string  $regulation  The hazardous package shipment regulation type.
     * @param  ?HazardousCommodityPackagingDetail  $packaging  Identifies number and type of packaging units for hazardous commodities.
     */
    public function __construct(
        public readonly ?string $offeror = null,
        public readonly ?string $accessibility = null,
        public readonly ?string $emergencyContactNumber = null,
        public readonly ?array $options = null,
        public readonly ?array $containers = null,
        public readonly ?string $regulation = null,
        public readonly ?HazardousCommodityPackagingDetail $packaging = null,
    ) {
    }
}
