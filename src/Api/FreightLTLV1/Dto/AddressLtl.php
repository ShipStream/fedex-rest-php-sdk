<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class AddressLtl extends Dto
{
    /**
     * @param  ?string[]  $streetLines  This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     * @param  ?string  $urbanizationCode  Optional<br> In Puerto Rico, identical street names and address number ranges can be found within the same ZIP Code. In these cases, the urbanization name is the only element that correctly identifies the location of a particular address.<br> Example: URB FAIR OAKS
     * @param  ?string  $city  This is a placeholder for City Name. <br>Note: This is conditional and not required in all the shipping requests. <br> Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code.Maximum length is 2.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 <br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     * @param  ?string  $postalCode  This is a placeholder for postal code.<br>Note: The postal code is required for postal-aware countries. <br> Example: 38127<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     * @param  ?string  $countryCode  This is the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?bool  $residential  Indicate whether this address is Residential as opposed to Commercial.
     * @param  ?string  $addressClassification  Classifies a given address as either of unknown, residential, mixed or business.
     */
    public function __construct(
        public readonly ?array $streetLines = null,
        public readonly ?string $urbanizationCode = null,
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?bool $residential = null,
        public readonly ?string $addressClassification = null,
    ) {
    }
}
