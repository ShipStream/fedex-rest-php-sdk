<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipment extends Dto
{
    protected static array $complexArrayTypes = [
        'recipients' => [TransitTimeRecipient::class],
        'requestedPackageLineItems' => [TransitTimeRequestedPackageLineItem::class],
    ];

    /**
     * @param  TransitTimeRequestedShipmentShipper  $shipper  The descriptive data on the physical location of shipment origin.
     * @param  TransitTimeRecipient[]  $recipients  Provide recipients physical location/address details to where the shipment delivered.
     * @param  string  $packagingType  Specify the packaging used.
     * @param  TransitTimeRequestedPackageLineItem[]  $requestedPackageLineItems  One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     * @param  ?string  $serviceType  Provide FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding transit times will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $shipDatestamp  This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>Required Format is YYYY-MM-DD <br> example : 2019-09-01
     * @param  ?string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a><br>Note:For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) pickupType is mandatory.
     * @param  ?TransitTimeShippingChargesPayment  $shippingChargesPayment  Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.<br>Note: For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) account number is mandatory to be provided under shippingChargesPayment.
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServices  $shipmentSpecialServices  Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: [BROKER_SELECT_OPTION]
     * @param  ?TransitTimeRequestedShipmentCustomsClearanceDetail  $customsClearanceDetail  This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     */
    public function __construct(
        public readonly TransitTimeRequestedShipmentShipper $shipper,
        public readonly array $recipients,
        public readonly string $packagingType,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $serviceType = null,
        public readonly ?string $shipDatestamp = null,
        public readonly ?string $pickupType = null,
        public readonly ?TransitTimeShippingChargesPayment $shippingChargesPayment = null,
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServices $shipmentSpecialServices = null,
        public readonly ?TransitTimeRequestedShipmentCustomsClearanceDetail $customsClearanceDetail = null,
    ) {
    }
}
