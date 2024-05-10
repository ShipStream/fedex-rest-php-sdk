<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaSpecialServiceOptions extends Dto
{
    /**
     * @param  mixed[]  $requestedShipment  The shipment details for which special service availability is requested.
     * @param  ?mixed[]  $accountNumber  This is a Payor account number associated with the shipment. Account number is required, for SmartPost shipments (i.e. Carrier code: FXSP)
     * @param  ?string[]  $carrierCodes  Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     */
    public function __construct(
        public readonly array $requestedShipment,
        public readonly ?array $accountNumber = null,
        public readonly ?array $carrierCodes = null,
    ) {
    }
}
