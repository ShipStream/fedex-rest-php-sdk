<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class CommercialInvoice extends Dto
{
    /**
     * @param  ?string  $shipmentPurpose  The reason for the shipment.  Note: SOLD is not a valid purpose for a Proforma Invoice.
     */
    public function __construct(
        public readonly ?string $shipmentPurpose = null,
    ) {
    }
}
