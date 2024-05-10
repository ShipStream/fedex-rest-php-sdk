<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaFreightPickupAvailabilityFreightPickupSpecialServiceDetail extends Dto
{
    /**
     * @param  ?mixed[]  $shipmentSpecialServicesRequested  The shipment details, such as service type, packaging type, weight.
     */
    public function __construct(
        public readonly ?array $shipmentSpecialServicesRequested = null,
    ) {
    }
}
