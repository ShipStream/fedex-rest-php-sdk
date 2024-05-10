<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CodTransportationChargesDetail extends Dto
{
    /**
     * @param  ?string  $rateType  Specify the Rate Type used.
     * @param  ?string  $rateLevelType  Specify which level the rate to be applied.
     * @param  ?string  $chargeLevelType  Specify which level the charges to be applied.
     * @param  ?string  $chargeType  Specify Charge type.
     */
    public function __construct(
        public readonly ?string $rateType = null,
        public readonly ?string $rateLevelType = null,
        public readonly ?string $chargeLevelType = null,
        public readonly ?string $chargeType = null,
    ) {
    }
}
