<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetail extends Dto
{
    /**
     * @param  ?Party  $broker  Use this object to provide the attributes such as physical address, contact information and account number information.
     * @param  ?string  $type  Identifies the type of broker.
     */
    public function __construct(
        public readonly ?Party $broker = null,
        public readonly ?string $type = null,
    ) {
    }
}
