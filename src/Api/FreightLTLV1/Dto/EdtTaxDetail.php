<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class EdtTaxDetail extends Dto
{
    /**
     * @param  ?string  $edtTaxType  Specifies the Estimated duties and taxes type. <br> Example: TaxType
     * @param  ?float  $amount  Specifies the amount for the estimated duties and taxes type.<br> Example: 785.12
     * @param  ?float  $taxableValue  Specifies the Estimated duties and taxes taxable Value.<br> Example: 562.23
     * @param  ?string  $name  Indicates the name for the Etd tax.
     * @param  ?string  $description  Indicates the description for the Etd tax.
     * @param  ?string  $formula  Indicates the formula.
     * @param  ?string  $effectiveDate  Specifies the Estimated duties and taxes effective date. Format [YYYY-MM-DD].<br>  Example: 2019-12-06
     */
    public function __construct(
        public ?string $edtTaxType = null,
        public ?float $amount = null,
        public ?float $taxableValue = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?string $formula = null,
        public ?string $effectiveDate = null,
    ) {}
}
