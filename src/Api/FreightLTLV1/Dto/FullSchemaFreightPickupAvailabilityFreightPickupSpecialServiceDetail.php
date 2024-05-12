<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaFreightPickupAvailabilityFreightPickupSpecialServiceDetail extends Dto
{
    /**
     * @param  ?ShipmentSpecialServicesRequested  $shipmentSpecialServicesRequested  Specifies the shipment special services requested.
     */
    public function __construct(
        public readonly ?ShipmentSpecialServicesRequested $shipmentSpecialServicesRequested = null,
    ) {
    }
}
