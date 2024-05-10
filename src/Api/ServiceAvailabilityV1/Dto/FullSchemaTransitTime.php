<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaTransitTime extends Dto
{
    /**
     * @param  ?TransitTimeRequestedShipment  $requestedShipment  Provide shipment data details for which a transit time is desired.
     * @param  ?string[]  $carrierCodes  Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     */
    public function __construct(
        public readonly ?TransitTimeRequestedShipment $requestedShipment = null,
        public readonly ?array $carrierCodes = null,
    ) {
    }
}
