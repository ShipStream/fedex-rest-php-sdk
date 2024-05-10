<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServicesRequestedFreightGuaranteeDetail extends Dto
{
    /**
     * @param  ?string  $time  Specified the time <br>Example: 10:00
     */
    public function __construct(
        public readonly ?string $time = null,
    ) {
    }
}
