<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetail2 extends Dto
{
    /**
     * @param  ?string  $broker  These are broker details for the shipment with physical address, contact and account number information.
     * @param  ?string  $type  Identifies the type of broker.
     */
    public function __construct(
        public readonly ?string $broker = null,
        public readonly ?string $type = null,
    ) {
    }
}
