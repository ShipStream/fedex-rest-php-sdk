<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetail2 extends Dto
{
    /**
     * @param  ?Party2  $broker  Use this object to provide the attributes such as physical address, contact information and account number information.
     * @param  ?string  $type  Identifies the type of broker.
     */
    public function __construct(
        public readonly ?Party2 $broker = null,
        public readonly ?string $type = null,
    ) {
    }
}
