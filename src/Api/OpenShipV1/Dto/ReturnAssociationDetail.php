<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnAssociationDetail extends Dto
{
    /**
     * @param  ?string  $shipDatestamp  This is the ship date for the outbound shipment associated with a return shipment. The format is YYYY-MM-DD.<br> Example: 2019-10-01
     * @param  ?string  $trackingNumber  This is a tracking number associated with this package.<br>Example: 49XXX0000XXX20032835
     */
    public function __construct(
        public readonly ?string $shipDatestamp = null,
        public readonly ?string $trackingNumber = null,
    ) {
    }
}
