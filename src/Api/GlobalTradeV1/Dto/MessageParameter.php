<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class MessageParameter extends Dto
{
    /**
     * @param  ?string  $id  Specifies the advisory ids.
     * @param  ?string  $value  Specifies the advisory regulation.
     */
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $value = null,
    ) {
    }
}
