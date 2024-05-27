<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCreateTag extends Dto
{
    /**
     * @param  PartyAccountNumber  $accountNumber  The account number of the recipient.
     */
    public function __construct(
        public readonly CreateTagRequestedShipment $requestedShipment,
        public readonly PartyAccountNumber $accountNumber,
    ) {
    }
}
