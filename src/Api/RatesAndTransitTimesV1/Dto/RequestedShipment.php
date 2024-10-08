<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedShipment extends Dto
{
    protected static array $complexArrayTypes = ['requestedPackageLineItems' => RequestedPackageLineItem::class];

    /**
     * @param  RateParty  $shipper  Specify the shipper address details.
     * @param  RateParty  $recipient  Specify the shipper address details.
     * @param  string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  RequestedPackageLineItem[]  $requestedPackageLineItems  These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Not used for FREIGHT.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 99.</li></ul>
     * @param  ?string  $serviceType  Indicate the FedEx service type used for this shipment. The results will be filtered by the service type value indicated. If no serviceType is indicated then all the applicable services and corresponding rates will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $preferredCurrency  Indicate the currency the caller requests to have used in all returned monetary values (when a choice is possible). Used in conjunction with the rateRequestType data element. This element is used to pull Preferred rates.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li></ul>Examples: ["LIST","PREFERRED"]
     * @param  ?string  $shipDateStamp  This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Required Format is YYYY-MM-DD<br> Example: 2019-09-05
     * @param  ?bool  $documentShipment  Indicate whether or not its a document Shipment.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details on how to calculate variable handling charges at the package level. If indicated, element rateLevelType is required.
     * @param  ?string  $packagingType  This is the Packaging type associated with this rate. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     * @param  ?int  $totalPackageCount  Indicate the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     * @param  ?float  $totalWeight  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?ShipmentSpecialServicesRequested  $shipmentSpecialServices  Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: [BROKER_SELECT_OPTION]<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     * @param  ?CustomsClearanceDetail  $customsClearanceDetail  This is Customs clearance data, used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     * @param  ?ServiceTypeDetailVo  $serviceTypeDetail  service type information details
     * @param  ?SmartPostInfoDetail  $smartPostInfoDetail  Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     */
    public function __construct(
        public RateParty $shipper,
        public RateParty $recipient,
        public string $pickupType,
        public array $requestedPackageLineItems,
        public ?string $serviceType = null,
        public ?string $preferredCurrency = null,
        public ?array $rateRequestType = null,
        public ?string $shipDateStamp = null,
        public ?bool $documentShipment = null,
        public ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public ?string $packagingType = null,
        public ?int $totalPackageCount = null,
        public ?float $totalWeight = null,
        public ?ShipmentSpecialServicesRequested $shipmentSpecialServices = null,
        public ?CustomsClearanceDetail $customsClearanceDetail = null,
        public ?ServiceTypeDetailVo $serviceTypeDetail = null,
        public ?SmartPostInfoDetail $smartPostInfoDetail = null,
    ) {}
}
