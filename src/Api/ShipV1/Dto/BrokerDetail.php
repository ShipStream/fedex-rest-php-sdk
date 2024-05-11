<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetail extends Dto
{
    /**
     * @param  ?mixed[]  $broker  These are broker details for the shipment with physical address, contact and account number information.
     * @param  ?string  $type  Identifies the type of broker.
     */
    public function __construct(
        public readonly ?array $broker = null,
        public readonly ?string $type = null,
    ) {
    }
}
