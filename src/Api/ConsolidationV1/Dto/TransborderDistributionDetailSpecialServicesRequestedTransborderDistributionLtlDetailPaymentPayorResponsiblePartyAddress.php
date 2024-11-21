<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class TransborderDistributionDetailSpecialServicesRequestedTransborderDistributionLtlDetailPaymentPayorResponsiblePartyAddress extends Dto
{
    /**
     * @param  ?string[]  $streetLines  This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.
     * @param  ?string  $city  This is a placeholder for City Name. <br>Note: This is conditional and not required in all the shipping requests. It is recommended for Express shipments for the most accurate ODA and OPA surcharges and not used for Ground/SmartPost.
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code. <br>Note: This is conditional and not required in all the shipping requests. It is recommended for Express shipments for the most accurate ODA and OPA surcharges and not used for Ground/SmartPost.
     * @param  ?string  $postalCode  This is placeholder for postal code.<br>Note: The postal code is required for postal-aware countries.
     * @param  ?string  $countryCode  This is the Two-letter country code. <a href="/developer-portal/en-us/reference-guide.html#countrycodes" target="_blank">Click here to see Country Codes</a>
     * @param  ?bool  $residential  Indicate whether this address is Residential as opposed to Commercial.<br>Valid Values: True or False.
     * @param  ?string  $urbanizationCode  Relevant only to addresses in Puerto Rico.
     * @param  ?string  $countryName  The fully spelt out name of a country.
     * @param  ?string  $geographicCoordinates  The geographic coordinates cooresponding to this address.
     * @param  ?string  $classification  Specifies that FedEx courier has confirmed that the address is a confirmed business location.
     */
    public function __construct(
        public ?array $streetLines = null,
        public ?string $city = null,
        public ?string $stateOrProvinceCode = null,
        public ?string $postalCode = null,
        public ?string $countryCode = null,
        public ?bool $residential = null,
        public ?string $urbanizationCode = null,
        public ?string $countryName = null,
        public ?string $geographicCoordinates = null,
        public ?string $classification = null,
    ) {}
}