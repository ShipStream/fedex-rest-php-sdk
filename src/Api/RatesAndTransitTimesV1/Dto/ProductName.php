<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ProductName extends Dto
{
    /**
     * @param  ?string  $type  Specifies the type of the product.<br> Example: medium
     * @param  ?string  $encoding  Specifies the encoding standard. <br> Example: utf-8.
     * @param  ?string  $value  Specifies the value of the Product.<br> Example: FedEx International First®.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $encoding = null,
        public readonly ?string $value = null,
    ) {
    }
}
