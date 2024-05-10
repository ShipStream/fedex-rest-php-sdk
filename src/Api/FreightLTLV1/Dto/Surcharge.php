<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Surcharge extends Dto
{
    /**
     * @param  ?string  $type  Specifies the surcharge type.<br>Example: FUEL <br><a onclick='loadDocReference("surcharges")'>Click here to see more on Surcharges.</a>
     * @param  ?string  $description  Specifies the description of the surcharge.<br>Example: Fuel Surcharge
     * @param  ?float  $amount  Indicate the amount.<br> Example: 5.42
     * @param  ?string  $level  Specifies the level of surcharge. <br> Example: level
     * @param  ?string  $name  The localized name of the surcharge. <br> Example: name
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $description = null,
        public readonly ?float $amount = null,
        public readonly ?string $level = null,
        public readonly ?string $name = null,
    ) {
    }
}
