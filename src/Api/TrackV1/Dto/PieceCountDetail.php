<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class PieceCountDetail extends Dto
{
    /**
     * @param  ?string  $count  Field which holds the piece count. <br> Example: 35
     * @param  ?string  $description  Field which holds the piece count description detail. <br> Example: picec count description
     * @param  ?string  $type  Field which holds the piece count location type. <br> Example: ORIGIN
     */
    public function __construct(
        public readonly ?string $count = null,
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
