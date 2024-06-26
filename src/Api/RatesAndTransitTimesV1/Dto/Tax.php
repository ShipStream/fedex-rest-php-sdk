<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Tax extends Dto
{
    /**
     * @param  ?float  $amount  Specifies the list of tax amounts
     * @param  ?string  $name  Specifies the localized name of the tax.
     * @param  ?string  $description  Specifies the description of the Surcharge/Tax.
     * @param  ?string  $type  Specifies the type of Surcharge/Tax.
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $name = null,
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
