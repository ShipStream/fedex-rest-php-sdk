<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeShipper extends Dto
{
    /**
     * @param  string  $postalCode  Identification of a region for mail/package delivery. Format and presence of this field will vary, depending on the country. Optional for non postal-aware countries. Maximum length is 10. <br>Example: 38127
     * @param  string  $countryCode  The two-letter code used to identify a country. Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $city  The name of city, town, etc. <br>Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  Identifying abbreviation for US state, canada Province. Format and presence of this field will vary, depending on the country. State code is required for US, CA, PR and not required for other countries. Conditional. Not used for Ground/SmartPost. Max length is 2.<br> Example: TN
     * @param  ?bool  $residential  Indicates whether this address is residential (as opposed to commercial).<br>Example: false
     */
    public function __construct(
        public readonly string $postalCode,
        public readonly string $countryCode,
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?bool $residential = null,
    ) {
    }
}
