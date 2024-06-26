<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CodeDisplayTextVo extends Dto
{
    /**
     * @param  ?string  $displayText  Display Text
     * @param  ?string  $code  Unique code
     */
    public function __construct(
        public readonly ?string $displayText = null,
        public readonly ?string $code = null,
    ) {
    }
}
