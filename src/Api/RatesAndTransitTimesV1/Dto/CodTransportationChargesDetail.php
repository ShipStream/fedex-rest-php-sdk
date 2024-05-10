<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class CodTransportationChargesDetail extends Dto
{
    /**
     * @param  ?string  $rateType  Specify COD Rate Type.
     * @param  ?string  $rateLevelType  Specify whether the rate applied on bundle or indiividual package.
     * @param  ?string  $chargeLevelType  Specify whether the charges applied on current or all packages.
     * @param  ?string  $chargeType  Specify the Charges Type.
     */
    public function __construct(
        public readonly ?string $rateType = null,
        public readonly ?string $rateLevelType = null,
        public readonly ?string $chargeLevelType = null,
        public readonly ?string $chargeType = null,
    ) {
    }
}
