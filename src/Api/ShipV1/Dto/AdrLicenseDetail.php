<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class AdrLicenseDetail extends Dto
{
    /**
     * @param  ?LicenseOrPermitDetail  $licenseOrPermitDetail  This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
     */
    public function __construct(
        public readonly ?LicenseOrPermitDetail $licenseOrPermitDetail = null,
    ) {
    }
}
