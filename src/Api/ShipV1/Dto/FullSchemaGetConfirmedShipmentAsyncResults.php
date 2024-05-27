<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaGetConfirmedShipmentAsyncResults extends Dto
{
    /**
     * @param  PartyAccountNumber  $accountNumber  The account number of the recipient.
     * @param  string  $jobId  Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. <br> Example: 89sxxxxx233ae24ff31xxxxx
     */
    public function __construct(
        public readonly PartyAccountNumber $accountNumber,
        public readonly string $jobId,
    ) {
    }
}
