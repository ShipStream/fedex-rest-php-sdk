<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RecipientCustomsId extends Dto
{
    /**
     * @param  ?string  $type  This is ID Type.
     * @param  ?string  $value  This is the ID number.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $value = null,
    ) {
    }
}
