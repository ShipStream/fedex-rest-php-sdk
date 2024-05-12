<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedShipment extends Dto
{
    protected static array $complexArrayTypes = [
        'recipients' => [RecipientsParty::class],
        'requestedPackageLineItems' => [RequestedPackageLineItem::class],
    ];

    /**
     * @param  ShipperParty  $shipper  Indicate the Shipper contact details for this shipment.
     * @param  RecipientsParty[]  $recipients  Specify recipient information and/ the physical destination location for the package.
     * @param  string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx. Please note, this element does not specify dispatching the courier for package pickup.<br><br>Valid values are:<ul><li>CONTACT_FEDEX_TO_SCHEDULE - FedEx will be contacted to request a pickup.</li><li>DROPOFF_AT_FEDEX_LOCATION - Shipment will be dropped off.</li><li>USE_SCHEDULED_PICKUP - Shipment will be picked up as part of a regular scheduled pickup.</li></ul><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  string  $serviceType  Indicate the FedEx service type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     * @param  string  $packagingType  Specify the packaging used.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     * @param  Payment  $shippingChargesPayment  Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     * @param  LabelSpecification  $labelSpecification  These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     * @param  RequestedPackageLineItem[]  $requestedPackageLineItems  These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     * @param  ?string  $shipDatestamp  This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     * @param  ?Money  $totalDeclaredValue  Specifies taxes or miscellaneous charge.
     * @param  ?string  $recipientLocationNumber  A unique identifier for a recipient location.
     * @param  ?float  $totalWeight  Indicate the shipment total weight in pounds.<br>Example: 10.6<br><br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
     * @param  ?ContactAndAddress1  $origin  Specify a contact and address instead of the sender address that will be printed on FedEx label. The sender address will be printed if it is not provided.Using this, you can designate a return address that's different from the sender's. The destination address must be in the same country as the sender.
     * @param  ?ShipmentSpecialServicesRequested  $shipmentSpecialServices  Specify the special services requested at the shipment level.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.<br>RETURN_SHIPMENT is required for creating return shipments.
     * @param  ?ShipShipmentEmailNotificationDetail  $emailNotificationDetail  This is used to provide eMail notification information..
     * @param  ?ExpressFreightDetail  $expressFreightDetail  Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     * @param  ?CustomsClearanceDetail  $customsClearanceDetail  These are customs clearance details. <br>Required for International and intra-country Shipments.
     * @param  ?SmartPostInfoDetail  $smartPostInfoDetail  Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     * @param  ?bool  $blockInsightVisibility  Indicate if the shipment be available to be visible/tracked using FedEx InSight<sup>®</sup> tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the FedEx InSight<sup>®</sup> tool.
     * @param  ?ShippingDocumentSpecification  $shippingDocumentSpecification  Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     * @param  ?string  $preferredCurrency  Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     * @param  ?int  $totalPackageCount  For an MPS, this is the total number of packages in the shipment.Applicable for parent shipment for one label at a time shipments. <br>Example: 25
     * @param  ?MasterTrackingId  $masterTrackingId  Indicates the tracking details for the package.Required for child shipments of an oneLabelAtATime shipments
     */
    public function __construct(
        public readonly ShipperParty $shipper,
        public readonly array $recipients,
        public readonly string $pickupType,
        public readonly string $serviceType,
        public readonly string $packagingType,
        public readonly Payment $shippingChargesPayment,
        public readonly LabelSpecification $labelSpecification,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $shipDatestamp = null,
        public readonly ?Money $totalDeclaredValue = null,
        public readonly ?string $recipientLocationNumber = null,
        public readonly ?float $totalWeight = null,
        public readonly ?ContactAndAddress1 $origin = null,
        public readonly ?ShipmentSpecialServicesRequested $shipmentSpecialServices = null,
        public readonly ?ShipShipmentEmailNotificationDetail $emailNotificationDetail = null,
        public readonly ?ExpressFreightDetail $expressFreightDetail = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public readonly ?CustomsClearanceDetail $customsClearanceDetail = null,
        public readonly ?SmartPostInfoDetail $smartPostInfoDetail = null,
        public readonly ?bool $blockInsightVisibility = null,
        public readonly ?ShippingDocumentSpecification $shippingDocumentSpecification = null,
        public readonly ?array $rateRequestType = null,
        public readonly ?string $preferredCurrency = null,
        public readonly ?int $totalPackageCount = null,
        public readonly ?MasterTrackingId $masterTrackingId = null,
    ) {
    }
}
