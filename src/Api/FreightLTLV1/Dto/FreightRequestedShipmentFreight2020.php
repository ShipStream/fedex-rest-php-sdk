<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightRequestedShipmentFreight2020 extends Dto
{
    protected static array $complexArrayTypes = ['requestedPackageLineItems' => [LtlRequestedPackageLineItem::class]];

    /**
     * @param  string  $pickupType  Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regularly scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  string  $serviceType  Indicate the Service Type for this shipment.
     * @param  string  $packagingType  Indicate the packaging type used for the shipment.</a>
     * @param  ShipperParty  $shipper  Indicate the Shipper contact details for this shipment.
     * @param  RecipientParty  $recipient  The descriptive information for the recipient of the shipment and the physical location for the package destination.
     * @param  FreightPayment  $shippingChargesPayment  Indicates the details about who and how the shipment will be paid for.<br>'payor' is optional when 'paymentType' provided is SENDER.
     * @param  Freight2020shipmentDetail  $freightShipmentDetail  Specifies the details specific to a FedEx Freight LTL shipment (i.e., FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services). If freight shipment detail is applicable, then the following fields are required: totalHandlingUnits, fedExFreightBillingContactAndAddress, lineItem, and role.
     * @param  LabelSpecification  $labelSpecification  These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     * @param  LtlRequestedPackageLineItem[]  $requestedPackageLineItems  One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for freight shipments.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     * @param  ?string  $shipDatestamp  This is the shipment date. Default value is current date in case the date is not provided in the request.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     * @param  ?int  $totalWeight  Indicate the shipment total weight in pounds.<br><br>Example: 10.6
     * @param  ?string  $preferredCurrency  Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     * @param  ?SoldToParty  $soldTo  Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     * @param  ?ContactAndAddress2  $origin  Specifies the contact and address details of a location.
     * @param  ?FreightShipment2020specialServicesRequested  $freightShipmentSpecialServices  These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
     * @param  ?EMailNotificationDetail  $emailNotificationDetail  These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     * @param  ?CustomsClearanceDetail  $customsClearanceDetail  These are customs clearance details. <br>Required for International and intra-country Shipments.
     * @param  ?LtlShippingDocumentSpecification  $shippingDocumentSpecification  Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li></ul>Examples: ["INCENTIVE", "LIST"]
     * @param  ?int  $totalPackageCount  For an MPS, this is the total number of packages in the shipment.<br>Example: 25
     * @param  ?TrackingId  $masterTrackingId  Indicates the tracking details for the package.
     */
    public function __construct(
        public readonly string $pickupType,
        public readonly string $serviceType,
        public readonly string $packagingType,
        public readonly ShipperParty $shipper,
        public readonly RecipientParty $recipient,
        public readonly FreightPayment $shippingChargesPayment,
        public readonly Freight2020shipmentDetail $freightShipmentDetail,
        public readonly LabelSpecification $labelSpecification,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $shipDatestamp = null,
        public readonly ?int $totalWeight = null,
        public readonly ?string $preferredCurrency = null,
        public readonly ?SoldToParty $soldTo = null,
        public readonly ?ContactAndAddress2 $origin = null,
        public readonly ?FreightShipment2020specialServicesRequested $freightShipmentSpecialServices = null,
        public readonly ?EMailNotificationDetail $emailNotificationDetail = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public readonly ?CustomsClearanceDetail $customsClearanceDetail = null,
        public readonly ?LtlShippingDocumentSpecification $shippingDocumentSpecification = null,
        public readonly ?array $rateRequestType = null,
        public readonly ?int $totalPackageCount = null,
        public readonly ?TrackingId $masterTrackingId = null,
    ) {
    }
}
