<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class InternationalTrafficInArmsRegulationsDetail extends Dto
{
    /**
     * @param  string  $licenseOrExemptionNumber  The export or license number for the ITAR shipment.<br>Minimum length is 5 characters.<br>Maximum length is 21 characters.<br>Example: 9871234
     */
    public function __construct(
        public readonly string $licenseOrExemptionNumber,
    ) {
    }
}
