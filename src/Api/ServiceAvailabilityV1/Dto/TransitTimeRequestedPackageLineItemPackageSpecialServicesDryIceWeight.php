<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItemPackageSpecialServicesDryIceWeight extends Dto
{
    /**
     * @param  ?string  $units  Specify the unit of measurement used to weigh the dry ice used in packaging.
     * @param  ?float  $value  Specify the value of weight of dry ice used in packaging. <br> Example: 10.0
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
