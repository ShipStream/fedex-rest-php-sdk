<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LicenseOrPermitDetail extends Dto
{
    /**
     * @param  ?string  $number  Specifies license or permit detail number.<br>Example: 12345
     * @param  ?string  $effectiveDate  Specifies the effective date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-08-09
     * @param  ?string  $expirationDate  Specifies the expiration date of the license.<br>The format is [YYYY-MM-DD].<br>Example: 2019-04-09
     */
    public function __construct(
        public readonly ?string $number = null,
        public readonly ?string $effectiveDate = null,
        public readonly ?string $expirationDate = null,
    ) {
    }
}
