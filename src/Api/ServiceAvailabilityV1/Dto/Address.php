<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class Address extends Dto
{
    /**
     * @param  string  $countryCode  This is a Two-letter country code.Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string[]  $streetLines  This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway"\, \"Suite 302"\]
     * @param  ?string  $city  This is a placeholder for City Name. <br> Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     * @param  ?string  $postalCode  This is the Postal code. This is Optional for non postal-aware countries. Max length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     * @param  ?bool  $residential  Indicate whether this address is Residential as opposed to Commercial.
     */
    public function __construct(
        public readonly string $countryCode,
        public readonly ?array $streetLines = null,
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?bool $residential = null,
    ) {
    }
}
