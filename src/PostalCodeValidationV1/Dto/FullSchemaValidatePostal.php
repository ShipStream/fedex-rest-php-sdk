<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PostalCodeValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaValidatePostal extends Dto
{
    /**
     * @param  string  $carrierCode  Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     * @param  string  $countryCode  The two-letter code used to identify a country. <br>Example:US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  string  $stateOrProvinceCode  This is the state or province code. Format and presence of this field will vary, depending on country. <br> Example: US<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     * @param  string  $postalCode  Identification code of a region (usally small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.  <br> Example: 75063-8659 <br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     * @param  string  $shipDate  Specify the date on which the package is to be shipped. The specified date should not be the current date or any date, 10 days after the current date. The date format must be YYYY-MM-DD. <br> Example: 2019-10-04
     * @param  ?string  $routingCode  Specify the routing code for the shipment. Routing code is the information that identifies the route the package or shipment may take. <br> Example: Memphis 38017 - HKA/NQA
     * @param  ?bool  $checkForMismatch  This element checks for mismatch between State/Province Code and Postal Code. <ul><li>When the checkForMismatch is set TRUE, for U.S. and Canada: The values in State/Province Code are checked with respect to Postal Code provided. If these entries are valid, the response provides respective State/Province Code and Postal Code. In case of mismatch of Postal Code and State/Province Code an error message is displayed.</li><li> When the checkForMismatch is set FALSE, for U.S. and Canada: The values in State/Province Code are not checked with respect to Postal Code provided. Instead the given data is reflected in the response.</li></ul> <br> For regions other than U.S and Canada regardless of the value of checkForMismatch the State/Province Code are checked with respect to the Postal Code and the response provides the respective State/Province Code and Postal Code.
     */
    public function __construct(
        public readonly string $carrierCode,
        public readonly string $countryCode,
        public readonly string $stateOrProvinceCode,
        public readonly string $postalCode,
        public readonly string $shipDate,
        public readonly ?string $routingCode = null,
        public readonly ?bool $checkForMismatch = null,
    ) {
    }
}
