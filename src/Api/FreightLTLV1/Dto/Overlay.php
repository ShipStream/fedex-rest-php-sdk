<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Overlay extends Dto
{
    /**
     * @param  ?string  $time  Specifies the time for the overlay occurrence.
     * @param  ?string  $type  Specifies the description for the overlay occurrence.
     */
    public function __construct(
        public readonly ?string $time = null,
        public readonly ?string $type = null,
    ) {
    }
}
