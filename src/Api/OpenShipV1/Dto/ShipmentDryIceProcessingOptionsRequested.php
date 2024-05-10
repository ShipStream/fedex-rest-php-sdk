<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentDryIceProcessingOptionsRequested extends Dto
{
    /**
     * @param  ?string[]  $options  Indicate type of DG being reported.
     */
    public function __construct(
        public readonly ?array $options = null,
    ) {
    }
}
