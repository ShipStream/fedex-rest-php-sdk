<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class NetExplosiveDetail extends Dto
{
    /**
     * @param  ?float  $amount  Specifies amount.<br>Example: 10.0
     * @param  ?string  $units  Specifies net explosive units.<br>Example: units
     * @param  ?string  $type  Specifies net explosive  classification type.<br>Example: NET_EXPLOSIVE_WEIGHT
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $units = null,
        public readonly ?string $type = null,
    ) {
    }
}
