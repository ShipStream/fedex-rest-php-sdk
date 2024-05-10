<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageIdentifier extends Dto
{
    /**
     * @param  ?string  $type  Indicate the package identifier to identify the package.<br> Example: SHIPPER_REFERENCE
     * @param  ?string[]  $value  Field which holds the value of the identifier used to identify the package. <br>Example: 'ASJFGVAS'
     * @param  ?string  $trackingNumberUniqueId  Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?array $value = null,
        public readonly ?string $trackingNumberUniqueId = null,
    ) {
    }
}
