<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Locale extends Dto
{
    /**
     * @param  ?string  $country  This is country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $language  This is language code.<br>Example: en<br><a onclick='loadDocReference("locales")'>Click here to see Locale</a>
     */
    public function __construct(
        public readonly ?string $country = null,
        public readonly ?string $language = null,
    ) {
    }
}
