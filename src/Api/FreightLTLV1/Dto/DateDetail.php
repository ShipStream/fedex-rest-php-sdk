<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class DateDetail extends Dto
{
    /**
     * @param  ?string  $dayOfWeek  The days of the week for which this capability applies.
     * @param  ?string  $dayFormat  This is expected delivery date in format [YYYY-MM-DDTHH:mm:ss]<br>Example: 2020-07-16T10:30:00
     */
    public function __construct(
        public readonly ?string $dayOfWeek = null,
        public readonly ?string $dayFormat = null,
    ) {
    }
}
