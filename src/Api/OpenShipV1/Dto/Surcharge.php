<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Surcharge extends Dto
{
    /**
     * @param  ?string  $amount  This is the surcharge amount.<br>Example: 15.35
     * @param  ?string  $surchargeType  This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY
     * @param  ?string  $level  Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE
     * @param  ?string  $description  Specifies the description for the surcharge.
     */
    public function __construct(
        public readonly ?string $amount = null,
        public readonly ?string $surchargeType = null,
        public readonly ?string $level = null,
        public readonly ?string $description = null,
    ) {
    }
}
