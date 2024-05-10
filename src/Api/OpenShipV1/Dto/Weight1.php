<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Weight1 extends Dto
{
    /**
     * @param  ?string  $units  This is the package weight unit. For Dry Ice the unit of measure is KG.
     * @param  ?float  $value  Weight Value.<br> Example: 10.0<br><a href="https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes" target="_blank">Click here to see Weight Values</a>
     */
    public function __construct(
        public readonly ?string $units = null,
        public readonly ?float $value = null,
    ) {
    }
}
