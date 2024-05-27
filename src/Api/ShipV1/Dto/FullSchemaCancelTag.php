<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCancelTag extends Dto
{
    /**
     * @param  PartyAccountNumber  $accountNumber  The account number of the recipient.
     * @param  string  $serviceType  This is the FedEx service type associated with the shipment.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $trackingNumber  The tracking number for the Express or Ground Tag to the cancelled.<br>Example: 301025281523<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     */
    public function __construct(
        public readonly PartyAccountNumber $accountNumber,
        public readonly string $serviceType,
        public readonly CompletedTagDetail $completedTagDetail,
        public readonly ?string $trackingNumber = null,
    ) {
    }
}
