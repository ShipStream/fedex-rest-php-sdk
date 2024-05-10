<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaPackageAndServiceOptions extends Dto
{
    /**
     * @param  string  $requestedShipment  The descriptive data for the requested shipment.
     * @param  ?string[]  $carrierCodes  Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     * @param  ?mixed[]  $accountNumber  This is a Payor account number associated with the shipment. Account number is required, for SmartPost shipments (i.e. Carrier code: FXSP)
     * @param  ?string  $systemOfMeasureType  This is system measurement type, such as Imperial or Metric.
     */
    public function __construct(
        public readonly string $requestedShipment,
        public readonly ?array $carrierCodes = null,
        public readonly ?array $accountNumber = null,
        public readonly ?string $systemOfMeasureType = null,
    ) {
    }
}
