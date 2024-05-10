<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItemPackageSpecialServicesDangerousGoodsDetail extends Dto
{
    /**
     * @param  ?string  $accessibility  Dangerous Goods Accessibility Type. Inaccessible means it does not have to be accessable on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
     * @param  ?string[]  $options  Indicate the kind of content being reported.
     */
    public function __construct(
        public readonly ?string $accessibility = null,
        public readonly ?array $options = null,
    ) {
    }
}
