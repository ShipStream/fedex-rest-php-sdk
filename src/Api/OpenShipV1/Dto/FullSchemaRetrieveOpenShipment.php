<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaRetrieveOpenShipment extends Dto
{
    /**
     * @param  string  $index  This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     * @param  PartyAccountNumber  $accountNumber  This is FedEx Account number details.
     */
    public function __construct(
        public readonly string $index,
        public readonly PartyAccountNumber $accountNumber,
    ) {
    }
}
