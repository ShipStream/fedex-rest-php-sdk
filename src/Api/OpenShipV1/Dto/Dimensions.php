<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Dimensions extends Dto
{
    /**
     * @param  ?int  $length  Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     * @param  ?int  $width  Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     * @param  ?int  $height  Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     * @param  ?string  $units  Indicate the Unit of measure for the provided dimensions.<br>Valid Values are:<li>IN - inches</li><li>CM - centimeters</li>Note: Any value other than CM including blank/null will default to IN.
     */
    public function __construct(
        public readonly ?int $length = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?string $units = null,
    ) {
    }
}
