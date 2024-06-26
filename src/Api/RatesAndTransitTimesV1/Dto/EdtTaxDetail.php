<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

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
        public readonly ?string $edtTaxType = null,
        public readonly ?float $amount = null,
        public readonly ?float $taxableValue = null,
        public readonly ?string $name = null,
        public readonly ?string $description = null,
        public readonly ?string $formula = null,
        public readonly ?string $effectiveDate = null,
    ) {
    }
}
