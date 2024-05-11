<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCreateTag extends Dto
{
    /**
     * @param  mixed[]  $requestedShipment  The shipment data describing the shipment being tendered to FedEx.
     * @param  mixed[]  $accountNumber  The account number (account value) associated with the shipment.
     */
    public function __construct(
        public readonly array $requestedShipment,
        public readonly array $accountNumber,
    ) {
    }
}
