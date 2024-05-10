<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class Amount extends Dto
{
    /**
     * @param  ?string  $currency  Indicate the currency code.<br> Example: USD<br><a onclick='loadDocReference("countrycodes")'>Click here to see Currency Codes</a>
     * @param  ?float  $value  Field which holds the amount value. <br> Example: 56.80
     */
    public function __construct(
        public readonly ?string $currency = null,
        public readonly ?float $value = null,
    ) {
    }
}
