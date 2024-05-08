<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ParsedPostalCode extends Dto
{
    /**
     * @param  ?string  $base  Indicates the base.<br> Example: 00926
     * @param  ?string  $addOn  Indicates the secondary value in Postal Code.<br> Example: 2716
     * @param  ?string  $deliveryPoint  Indicates the tertiary value in Postal Code.<br> Example: 50
     */
    public function __construct(
        public readonly ?string $base = null,
        public readonly ?string $addOn = null,
        public readonly ?string $deliveryPoint = null,
    ) {
    }
}
