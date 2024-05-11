<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOnInvoiceAcceptanceDetail extends Dto
{
    /**
     * @param  ?mixed[]  $recipient  The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     */
    public function __construct(
        public readonly ?array $recipient = null,
    ) {
    }
}
