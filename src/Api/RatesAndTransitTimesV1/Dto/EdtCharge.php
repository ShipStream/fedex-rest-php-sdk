<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class EdtCharge extends Dto
{
    /**
     * @param  ?string[]  $alternateHarmonizedCodes  Specifies the alternate harmonized codes for the commodity.<br> Example: alternateHarmonizedCodes
     * @param  ?EdtTaxDetail  $edtTaxDetail  Specifies the Estimated duties and taxes detail.
     * @param  ?string  $harmonizedCode  This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
     */
    public function __construct(
        public readonly ?array $alternateHarmonizedCodes = null,
        public readonly ?EdtTaxDetail $edtTaxDetail = null,
        public readonly ?string $harmonizedCode = null,
    ) {
    }
}
