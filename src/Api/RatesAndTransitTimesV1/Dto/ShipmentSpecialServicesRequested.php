<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServicesRequested extends Dto
{
    protected static array $attributeMap = ['shipmentCodDetail' => 'shipmentCODDetail'];

    /**
     * @param  ?ShipmentSpecialServicesRequestedReturnShipmentDetail  $returnShipmentDetail  Details for the Return Shipment.
     * @param  ?DeliveryOnInvoiceAcceptanceDetail  $deliveryOnInvoiceAcceptanceDetail  Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     * @param  ?InternationalTrafficInArmsRegulationsDetail  $internationalTrafficInArmsRegulationsDetail  These are International Traffic In Arms Regulations shipment service Details.
     * @param  ?PendingShipmentDetail  $pendingShipmentDetail  This object is used to specify the Pending Shipment Type for Email label.
     * @param  ?HoldAtLocationDetail  $holdAtLocationDetail  Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     * @param  ?ShipmentCodDetail  $shipmentCodDetail  Specifies Shipment COD Detail
     * @param  ?ShipmentDryIceDetail  $shipmentDryIceDetail  Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     * @param  ?InternationalControlledExportDetail  $internationalControlledExportDetail  Use this object to specify International Controlled Export shipment Details.
     * @param  ?HomeDeliveryPremiumDetail  $homeDeliveryPremiumDetail  These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     * @param  ?string[]  $specialServiceTypes  Indicate the special services  requested.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     */
    public function __construct(
        public readonly ?ShipmentSpecialServicesRequestedReturnShipmentDetail $returnShipmentDetail = null,
        public readonly ?DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null,
        public readonly ?InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null,
        public readonly ?PendingShipmentDetail $pendingShipmentDetail = null,
        public readonly ?HoldAtLocationDetail $holdAtLocationDetail = null,
        public readonly ?ShipmentCodDetail $shipmentCodDetail = null,
        public readonly ?ShipmentDryIceDetail $shipmentDryIceDetail = null,
        public readonly ?InternationalControlledExportDetail $internationalControlledExportDetail = null,
        public readonly ?HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null,
        public readonly ?array $specialServiceTypes = null,
    ) {
    }
}
