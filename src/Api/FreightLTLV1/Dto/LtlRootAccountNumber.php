<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlRootAccountNumber extends Dto
{
    /**
     * @param  ?string  $value  This is the account number. Maximum Length is 9. <br>Example: XXX456XXX
     */
    public function __construct(
        public ?string $value = null,
    ) {}
}
