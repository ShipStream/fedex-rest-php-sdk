<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class Parameter extends Dto
{
    /**
     * @param  ?string  $value  Identifies the error option to be applied.
     * @param  ?string  $key  Indicates the value associated with the key.
     */
    public function __construct(
        public readonly ?string $value = null,
        public readonly ?string $key = null,
    ) {
    }
}
