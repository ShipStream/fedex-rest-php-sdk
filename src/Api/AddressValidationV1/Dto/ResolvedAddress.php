<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ResolvedAddress extends Dto
{
    protected static array $attributeMap = ['normalizedStatusNameDpv' => 'normalizedStatusNameDPV'];

    protected static array $complexArrayTypes = ['cityToken' => ResolutionToken::class];

    /**
     * @param  ?string[]  $streetLinesToken  Indicates the resolved street address lines.<br>Example: [\"7372 PARKRIDGE BLVD\", \"APT 286, 2903 sprank\"]
     * @param  ?string  $city  This is resolved city name.<br> Example: IRVING
     * @param  ?string  $stateOrProvinceCode  This is resolved state or province code.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     * @param  ?string  $countryCode  This is resolved ISO alpha 2 country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string[]  $customerMessage  Returns messages pertaining to the resolved address indicating if any additional information is required.<br><br>Following are informational code and messages with respect to the results:<ul><li><i>INVALID.SUITE.NUMBER</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>SUITE.NUMBER.REQUIRED</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>PARTIAL.STREET.MATCH</i> &ndash; A street address is required for delivery. The entered address is a street number range.</li><li><i>MISSING.OR.AMBIGUOUS.DIRECTIONAL</i> &ndash; Invalid or missing address directional.</li><li><i>INTERPOLATED.STREET.ADDRESS</i> &ndash; Unable to confirm exact street number for the entered street name. The address falls within a valid range for the street name.</li><li><i>RRHC.CONVERSION</i> &ndash; A street address is required for delivery. The address has been converted from a rural route.</li></ul>
     * @param  ResolutionToken[]|null  $cityToken  This is the resolved city name with a token. The token is an indication to the changes made.<br> Examples: [TOK-1X3256]
     * @param  ?ResolutionToken  $postalCodeToken  Specifies the resolved attribute with a token indicating if it was changed or not.
     * @param  ?ParsedPostalCode  $parsedPostalCode  The postal code specified in a form that is supported by USPS as base, secondary and tertiary.<ul><li>Base</li><li>AddOn</li><li>DeliveryPoint</li></ul>Example: 75063-8659
     * @param  ?string  $classification  This is the classification type of a FedEx address.<br>Valid values:<ul><li>BUSINESS</li><li>RESIDENTIAL</li><li>MIXED (If it is a multi-tenant based address and contains both business and residential units.)</li><li>UNKNOWN (If just a zip code is provided, Address Validation Service returns 'unknown' for the business/residential classification.)</li>
     * @param  ?bool  $postOfficeBox  Indicates if the resolved address is a P.O. Box.
     * @param  ?bool  $normalizedStatusNameDpv  Indicates the presence of a delivery point such as a mailbox. Provided only for US addresses that are standardized against Postal Data.
     * @param  ?string  $standardizedStatusNameMatchSource  Indicates the source from which the standardized address is matched. <br> Example: Postal or Map.
     * @param  ?string  $resolutionMethodName  Indicates the resolution method used to resolve the address. <br>Valid values: <ul><li>USPS_VALIDATE</li><li>CA_VALIDATE</li><li>GENERIC_VALIDATE</li><li>NAVTEQ_GEO_VALIDATE</li><li>TELEATLAS_GEO_VALIDATE</li></ul>
     * @param  ?bool  $ruralRouteHighwayContract  Indicates if the resolved address is a Rural Route or Highway Contract (US only). It returns true if it is rural route.
     * @param  ?bool  $generalDelivery  Indicates the mail service is for those without permanent address. The mails for this address are held at a post office. Only applies to addresses that can be standardized against Postal Data. Not provided for US Geo Validated addresses. <br>Note: Only returned when the address cannot be resolved.
     * @param  ?Attributes  $attributes  These are the  key-value pair as additional information returned along with the address processed by the system. These attribute will list what is working and what is not on the input address. For More information, look in to Chapter Address Attributes in the Overview.<br><a onclick='loadDocReference("addressattributes")'>Click here to see Address Attributes</a>
     */
    public function __construct(
        public ?array $streetLinesToken = null,
        public ?string $city = null,
        public ?string $stateOrProvinceCode = null,
        public ?string $countryCode = null,
        public ?array $customerMessage = null,
        public ?array $cityToken = null,
        public ?ResolutionToken $postalCodeToken = null,
        public ?ParsedPostalCode $parsedPostalCode = null,
        public ?string $classification = null,
        public ?bool $postOfficeBox = null,
        public ?bool $normalizedStatusNameDpv = null,
        public ?string $standardizedStatusNameMatchSource = null,
        public ?string $resolutionMethodName = null,
        public ?bool $ruralRouteHighwayContract = null,
        public ?bool $generalDelivery = null,
        public ?Attributes $attributes = null,
    ) {}
}
