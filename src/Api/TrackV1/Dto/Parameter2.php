<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class Parameter2 extends Dto
{
    /**
     * @param  ?string  $value
     * @param  ?string  $key
     */
    public function __construct(
        public readonly ?string $value = null,
        public readonly ?string $key = null,
    ) {
    }
}
