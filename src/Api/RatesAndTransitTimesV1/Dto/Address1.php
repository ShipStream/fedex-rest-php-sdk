<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Address1 extends Dto
{
    /**
     * @param  ?string  $city  Specify name of city, town, etc.<br> Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  Specify State or province code. Maximum length is 2.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Codes</a>
     * @param  ?string  $postalCode  Specify the postal code. This is optional for non postal- aware countries. Maximum length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     * @param  ?string  $countryCode  The two-letter country code. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?bool  $residential  Indicate whether this address is residential (as opposed to commercial).
     */
    public function __construct(
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?bool $residential = null,
    ) {
    }
}
