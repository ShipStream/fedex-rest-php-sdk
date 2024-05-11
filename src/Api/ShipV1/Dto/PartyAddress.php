<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyAddress extends Dto
{
    /**
     * @param  string[]  $streetLines  Combination of number, street name, etc. At least one line is required for a valid physical address. Empty lines should not be included. Max Length is 35.<br>Example: [1550 Union Blvd,Suite 302]
     * @param  string  $city  The name of city, town of the recipient.Max length is 35.<br>Example: Beverly Hills
     * @param  string  $countryCode  This is the two-letter country code.<br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     * @param  ?string  $stateOrProvinceCode  The US States,Canada and Puerto Rico Province codes of the recipient. The Format and presence of this field may vary depending on the country.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA
     * @param  ?string  $postalCode  This is the postal code.<br>Note: This is Optional for non postal-aware countries. Maximum length is 10.<br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     * @param  ?bool  $residential  Indicate whether this address is residential (as opposed to commercial).
     */
    public function __construct(
        public readonly array $streetLines,
        public readonly string $city,
        public readonly string $countryCode,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?bool $residential = null,
    ) {
    }
}
