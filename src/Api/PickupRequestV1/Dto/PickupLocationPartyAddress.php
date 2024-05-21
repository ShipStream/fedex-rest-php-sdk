<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupLocationPartyAddress extends Dto
{
    /**
     * @param  string[]  $streetLines
     */
    public function __construct(
        public readonly array $streetLines,
        public readonly string $city,
        public readonly string $stateOrProvinceCode,
        public readonly string $postalCode,
        public readonly string $countryCode,
    ) {
    }
}
