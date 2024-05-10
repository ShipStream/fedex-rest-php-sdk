<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class WeightAvailability extends Dto
{
    /**
     * @param  ?string  $units  Indicates the type of package weight.<br> Example: KG
     * @param  ?float  $value  Weight Value.<br> Example: 68.25<br><a onclick='loadDocReference("packagetypes")'>Click here to see Weight Values</a>
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
