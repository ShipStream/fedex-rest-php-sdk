<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOnInvoiceAcceptanceDetail extends Dto
{
    /**
     * @param  ?string  $recipient  The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     */
    public function __construct(
        public readonly ?string $recipient = null,
    ) {
    }
}
