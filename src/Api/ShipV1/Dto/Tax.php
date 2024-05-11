<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Tax extends Dto
{
    /**
     * @param  ?float  $amount  Indicates the amount of tax.<br>Example: 10.0
     * @param  ?string  $level  Indicates the level of tax.
     * @param  ?string  $description  Specifies the tax description.
     * @param  ?string  $type  Specifies the type of the tax.
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $level = null,
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
