<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentOperationalDetail extends Dto
{
    /**
     * @param  ?string  $originServiceArea  Indicates the origin service area.<br>Example: A1
     * @param  ?string  $serviceCode  Indicates the service code.<br>Example: 010
     * @param  ?string  $airportId  Indicates the airport identifier.<br>Example: DFW
     * @param  ?string  $postalCode  Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     * @param  ?string  $scac  Indicates standard carrier alpha code.
     * @param  ?string  $deliveryDay  Specifies expected/estimated day of week of the delivery.<br>Example: TUE
     * @param  ?string  $originLocationId  This is the origin Location identifier.<br>Example: 678
     * @param  ?string  $countryCode  Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     * @param  ?string  $astraDescription  Specifies astra description.<br>Example: SMART POST
     * @param  ?int  $originLocationNumber  Specifies origin location number.<br>Example: 243
     * @param  ?string  $deliveryDate  Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05
     * @param  ?string[]  $deliveryEligibilities  FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"]
     * @param  ?bool  $ineligibleForMoneyBackGuarantee  Indicates that this shipment is not eligible for money back guarantee.
     * @param  ?string  $maximumTransitTime  Maximum expected transit time.<br>Example: SEVEN_DAYS
     * @param  ?string  $destinationLocationStateOrProvinceCode  This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     * @param  ?string  $astraPlannedServiceLevel  Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A
     * @param  ?string  $destinationLocationId  Specifies the FedEx Destination Location Identifier.<br>Example: DALA
     * @param  ?string  $transitTime  Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     * @param  ?int  $destinationLocationNumber  Indicates destination location number.<br>Example: 876
     * @param  ?string  $packagingCode  Indicates packaging code.<br>Example: 03
     * @param  ?string  $commitDate  This is committed date of delivery.<br>Example: 2019-10-15
     * @param  ?string  $publishedDeliveryTime  This is delivery time, as published in Service Guide.<br>Example: 10:30A
     * @param  ?string  $ursaSuffixCode  This is ursa suffix code.<br>Example: Ga
     * @param  ?string  $ursaPrefixCode  This is ursa prefix code.<br>Example: XH
     * @param  ?string  $destinationServiceArea  Specifies destination service area.<br>Example: A1
     * @param  ?string  $commitDay  Committed day of week of delivery.<br>Example: TUE
     * @param  ?string  $customTransitTime  Transit time based on customer eligibility.<br>Example: ONE_DAY
     */
    public function __construct(
        public readonly ?string $originServiceArea = null,
        public readonly ?string $serviceCode = null,
        public readonly ?string $airportId = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $scac = null,
        public readonly ?string $deliveryDay = null,
        public readonly ?string $originLocationId = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $astraDescription = null,
        public readonly ?int $originLocationNumber = null,
        public readonly ?string $deliveryDate = null,
        public readonly ?array $deliveryEligibilities = null,
        public readonly ?bool $ineligibleForMoneyBackGuarantee = null,
        public readonly ?string $maximumTransitTime = null,
        public readonly ?string $destinationLocationStateOrProvinceCode = null,
        public readonly ?string $astraPlannedServiceLevel = null,
        public readonly ?string $destinationLocationId = null,
        public readonly ?string $transitTime = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?int $destinationLocationNumber = null,
        public readonly ?string $packagingCode = null,
        public readonly ?string $commitDate = null,
        public readonly ?string $publishedDeliveryTime = null,
        public readonly ?string $ursaSuffixCode = null,
        public readonly ?string $ursaPrefixCode = null,
        public readonly ?string $destinationServiceArea = null,
        public readonly ?string $commitDay = null,
        public readonly ?string $customTransitTime = null,
    ) {
    }
}
