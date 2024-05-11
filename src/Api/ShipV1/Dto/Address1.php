<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Address1 extends Dto
{
    /**
     * @param  ?string[]  $streetLines  Combination of number, street name, etc. At least one line is required for a valid physical address. Empty lines should not be included. Max Length is 35.<br>Example: [1550 Union Blvd,Suite 302]
     * @param  ?string  $city  This is a placeholder for City Name.<br>Note: This is conditional and not required in all the requests.<br>Note: It is recommended for Express shipments for the most accurate ODA and OPA surcharges.<br>Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     * @param  ?string  $postalCode  Indicate the Postal code. This is Optional for non postal-aware countries. Maximum length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     * @param  ?string  $countryCode  This is the two-letter country code.<br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     * @param  ?bool  $residential  Indicate whether this address is residential (as opposed to commercial).
     */
    public function __construct(
        public readonly ?array $streetLines = null,
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?bool $residential = null,
    ) {
    }
}
