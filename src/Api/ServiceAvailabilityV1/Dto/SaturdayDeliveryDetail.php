<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class SaturdayDeliveryDetail extends Dto
{
    /**
     * @param  ?ParsedContactAndAddress  $locationContactAndAddress  These are contact and address details for this special service.
     */
    public function __construct(
        public readonly ?ParsedContactAndAddress $locationContactAndAddress = null,
    ) {
    }
}
