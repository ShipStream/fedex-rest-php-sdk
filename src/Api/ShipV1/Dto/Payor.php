<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Payor extends Dto
{
    /**
     * @param  ResponsiblePartyParty  $responsibleParty  Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
     */
    public function __construct(
        public readonly ResponsiblePartyParty $responsibleParty,
    ) {
    }
}
