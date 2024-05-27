<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class KeyDisplayTextVo extends Dto
{
    /**
     * @param  ?string  $displayText  Display Text
     * @param  ?string  $key  Unique Key
     */
    public function __construct(
        public readonly ?string $displayText = null,
        public readonly ?string $key = null,
    ) {
    }
}
