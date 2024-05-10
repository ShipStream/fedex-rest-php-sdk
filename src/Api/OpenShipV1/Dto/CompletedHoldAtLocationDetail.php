<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedHoldAtLocationDetail extends Dto
{
    /**
     * @param  ?string  $holdingLocationType  Indicates the type of the FedEx holding location <br>Example: FEDEX_STAFFED
     * @param  ?mixed[]  $holdingLocation  Indicate the physical address of the FedEx holding location.
     */
    public function __construct(
        public readonly ?string $holdingLocationType = null,
        public readonly ?array $holdingLocation = null,
    ) {
    }
}
