<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaVerifyShipment extends Dto
{
    /**
     * @param  RequestedShipmentVerify  $requestedShipment  This is the detailed shipment request data to be validated before being submitted to FedEx.
     * @param  ?ShipperAccountNumber  $accountNumber  The account number associated with the shipment.
     */
    public function __construct(
        public readonly RequestedShipmentVerify $requestedShipment,
        public readonly ?ShipperAccountNumber $accountNumber = null,
    ) {
    }
}
