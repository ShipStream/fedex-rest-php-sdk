<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ProductName extends Dto
{
    /**
     * @param  ?string  $type  The type of name (long, medium, short, etc.) to which this value refers.<br>Example: long
     * @param  ?string  $encoding  The character encoding used to represent this product name. <br>Example: UTF-8
     * @param  ?string  $value  Specifies the value of the Product.<br>Example: F-2
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $encoding = null,
        public readonly ?string $value = null,
    ) {
    }
}
