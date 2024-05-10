<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class BinaryBarcode extends Dto
{
    /**
     * @param  ?string  $type  This is the type of barcode data available in this instance.<br> Example: COMMON-2D
     * @param  ?string  $value  This is the value.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $value = null,
    ) {
    }
}
