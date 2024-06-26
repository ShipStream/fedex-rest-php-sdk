<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight extends Dto
{
    /**
     * @param  ?string  $unit  This is package weight type.
     * @param  ?string  $value  This is package weight. Max. Length is 99999. <br> Example: 22222.0
     */
    public function __construct(
        public readonly ?string $unit = null,
        public readonly ?string $value = null,
    ) {
    }
}
