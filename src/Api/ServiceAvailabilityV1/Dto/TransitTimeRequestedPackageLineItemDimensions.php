<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItemDimensions extends Dto
{
    /**
     * @param  ?int  $length  Length of a package or shipment. Maximum Length is 999. <br> Example: 100
     * @param  ?int  $width  Width dimensions of a package or shipment. Maximum Length is 999. <br> Example: 50
     * @param  ?int  $height  Height of a package or shipment. Maximum Length is 999. <br> Example: 30
     * @param  ?string  $units  Unit of measure for the provided dimensions.<br> Valid Values: IN - inches, CM - centimeters <br>Example: CM
     */
    public function __construct(
        public readonly ?int $length = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?string $units = null,
    ) {
    }
}
