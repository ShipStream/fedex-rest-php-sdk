<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOnInvoiceAcceptanceDetail extends Dto
{
    /**
     * @param  ?RecipientsParty  $recipient  The descriptive information of the recipient for the shipment and the physical location for the package destination.
     */
    public function __construct(
        public readonly ?RecipientsParty $recipient = null,
    ) {
    }
}
