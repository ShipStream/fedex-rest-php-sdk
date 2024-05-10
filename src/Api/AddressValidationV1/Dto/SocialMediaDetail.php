<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class SocialMediaDetail extends Dto
{
    /**
     * @param  ?string  $attributes  Specifies additional attributes about this contact.
     * @param  ?string  $platformId  Specifies Platform Id
     */
    public function __construct(
        public readonly ?string $attributes = null,
        public readonly ?string $platformId = null,
    ) {
    }
}
