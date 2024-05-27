<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaSpecialServiceOptions extends Dto
{
    /**
     * @param  RequestedShipment  $requestedShipment  shipment information for the shipment being requested
     * @param  ?AccountNumber  $accountNumber  This is FedEx account number details.
     * @param  ?string[]  $carrierCodes  Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     */
    public function __construct(
        public readonly RequestedShipment $requestedShipment,
        public readonly ?AccountNumber $accountNumber = null,
        public readonly ?array $carrierCodes = null,
    ) {
    }
}
