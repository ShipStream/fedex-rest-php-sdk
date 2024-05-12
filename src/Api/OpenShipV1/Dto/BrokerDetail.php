<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetail extends Dto
{
    /**
     * @param  ?Party1  $broker
     * @param  ?string  $type  Identifies the type of broker.
     */
    public function __construct(
        public readonly ?Party1 $broker = null,
        public readonly ?string $type = null,
    ) {
    }
}
