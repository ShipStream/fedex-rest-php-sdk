<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class DimensionsAvailability extends Dto
{
    /**
     * @param  ?int  $length  Indicate the length of the package. No implied decimal places.<br> Note: No validation is happening. Recommended maximum value is 999.</br> <br> Example: 20
     * @param  ?int  $width  Indicate the width of the package. No implied decimal places.<br> Note: No validation is happening. Recommended maximum value is 999.</br> <br> Example: 10
     * @param  ?int  $height  Indicate the height of the package. No implied decimal places.<br> Note: No validation is happening. Recommended maximum value is 999.</br> <br> Example: 10
     * @param  ?string  $units  Unit of measure for the provided dimensions.<br>Valid Values are IN - inches, CM - centimeters. <br><i>Note: Any value other than CM including blank/null will default to IN.</i><br>Example: CM
     */
    public function __construct(
        public readonly ?int $length = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?string $units = null,
    ) {
    }
}
