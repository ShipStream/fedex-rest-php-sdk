<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class OperationalDetail extends Dto
{
    protected static array $attributeMap = ['maximumTransitTime' => 'MaximumTransitTime'];

    /**
     * @param  ?string[]  $originLocationIds  Indicate the location ID of the origin of shipment. <br> Example: YBZA
     * @param  ?string[]  $commitDays  Indicate the delivery commitment day.<br> Example: MON
     * @param  ?string  $serviceCode  Indicate the service code. <br> Example: 06
     * @param  ?string  $airportId  Specify the Airport Id. <br> Example: MEM
     * @param  ?string  $scac  Indicate the Standard Carrier Alpha Code (SCAC) is a privately controlled US code used to identify vessel operating common carriers (VOCC). It is typically two to four letters long.
     * @param  ?string[]  $originServiceAreas  Specify origin service area.<br> Example: AM
     * @param  ?string  $deliveryDay  Specify the delivery commitment day. <br> Example: SAT
     * @param  int[]|null  $originLocationNumbers  Specify the origin location ID.<br> Example: 6121
     * @param  ?string  $destinationPostalCode  Indicate the destination postal code.<br> Example: 38017
     * @param  ?string  $commitDate  Indicate the shipment Commit Date. <br> Example: 2019-07-22T08:30:00
     * @param  ?string  $astraDescription  Indicate the ASTRA description for the label. <br> Example: XXXL1ST
     * @param  ?string  $deliveryDate  Indicate the delivery date. <br> Example: 2019-07-22T08:30:00
     * @param  ?string[]  $deliveryEligibilities  Indicate the delivery eligibilities.
     * @param  ?bool  $ineligibleForMoneyBackGuarantee  indicate if ineligible For Money Back Guarantee.
     * @param  ?string  $maximumTransitTime  Specify Maximum transit time. <br> Example: THREE_DAYS
     * @param  ?string  $astraPlannedServiceLevel  Indicate Astra Planned Service Level. <br> Example: astraPlannedServicelevel
     * @param  ?string[]  $destinationLocationIds  Indicate Destination Location Ids. <br> Example: HKAA
     * @param  ?string[]  $destinationLocationStateOrProvinceCodes  Indicate destination location State Or Province code. <br> Example: TN<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     * @param  ?string  $transitTime  Indicate the Transit Time in days. <br> Example: THREE_DAYS
     * @param  ?string  $packagingCode  Indicate the Packaging Code. <br> Example: M1M1M1
     * @param  int[]|null  $destinationLocationNumbers  Indicate the Destination Location Numbers. <br> Example: 386
     * @param  ?string  $publishedDeliveryTime  Indicate the Published Delivery Time. <br> Example: THREE_DAYS
     * @param  ?string[]  $countryCodes  Indicate the Country Code.<br>Example: [ US, IN]<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string[]  $stateOrProvinceCodes  Specify the state Or Province Code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br> Example: TN<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     * @param  ?string  $ursaPrefixCode  This is FedEx URSA Prefix Code. <br> Example: PrefixCode
     * @param  ?string  $ursaSuffixCode  This is URSA Suffix Code. <br> Example: SuffixCode
     * @param  ?string[]  $destinationServiceAreas  This is Destination Service Areas. <br> Example: A2
     * @param  ?string[]  $originPostalCodes  This is Origin Postal Codes. <br> Example: M1M1M1
     * @param  ?string  $customTransitTime  This is Custom Transit Time in days. <br> Example: THREE_DAYS
     */
    public function __construct(
        public readonly ?array $originLocationIds = null,
        public readonly ?array $commitDays = null,
        public readonly ?string $serviceCode = null,
        public readonly ?string $airportId = null,
        public readonly ?string $scac = null,
        public readonly ?array $originServiceAreas = null,
        public readonly ?string $deliveryDay = null,
        public readonly ?array $originLocationNumbers = null,
        public readonly ?string $destinationPostalCode = null,
        public readonly ?string $commitDate = null,
        public readonly ?string $astraDescription = null,
        public readonly ?string $deliveryDate = null,
        public readonly ?array $deliveryEligibilities = null,
        public readonly ?bool $ineligibleForMoneyBackGuarantee = null,
        public readonly ?string $maximumTransitTime = null,
        public readonly ?string $astraPlannedServiceLevel = null,
        public readonly ?array $destinationLocationIds = null,
        public readonly ?array $destinationLocationStateOrProvinceCodes = null,
        public readonly ?string $transitTime = null,
        public readonly ?string $packagingCode = null,
        public readonly ?array $destinationLocationNumbers = null,
        public readonly ?string $publishedDeliveryTime = null,
        public readonly ?array $countryCodes = null,
        public readonly ?array $stateOrProvinceCodes = null,
        public readonly ?string $ursaPrefixCode = null,
        public readonly ?string $ursaSuffixCode = null,
        public readonly ?array $destinationServiceAreas = null,
        public readonly ?array $originPostalCodes = null,
        public readonly ?string $customTransitTime = null,
    ) {
    }
}
