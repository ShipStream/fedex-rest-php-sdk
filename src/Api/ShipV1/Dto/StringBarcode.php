<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class StringBarcode extends Dto
{
    /**
     * @param  ?string  $type  This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>
     * @param  ?string  $value  This is the value.<br>Example: 1010062512241535917900794953544894
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $value = null,
    ) {
    }
}
