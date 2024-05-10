<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight extends Dto
{
    /**
     * @param  ?string  $units  Indicates the type of package weight.
     * @param  ?float  $value  Indicates the package weight. Maximum length is 99999.<br> Example: 20
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
