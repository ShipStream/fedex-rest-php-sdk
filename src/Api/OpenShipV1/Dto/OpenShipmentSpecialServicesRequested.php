<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class OpenShipmentSpecialServicesRequested extends Dto
{
    protected static array $attributeMap = ['shipmentCodDetail' => 'shipmentCODDetail'];

    /**
     * @param  ?string[]  $specialServiceTypes  Indicate the Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     * @param  ?EtdDetail  $etdDetail  Use this object to specify all information on how the electronic Trade document references used with the shipment.
     * @param  ?DeliveryOnInvoiceAcceptanceDetail  $deliveryOnInvoiceAcceptanceDetail  Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
     * @param  ?InternationalTrafficInArmsRegulationsDetail  $internationalTrafficInArmsRegulationsDetail  These are International Traffic In Arms Regulations shipment service details.
     * @param  ?HoldAtLocationDetail  $holdAtLocationDetail  Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     * @param  ?ShipmentCodDetail  $shipmentCodDetail  This is the shipment level COD detail.
     * @param  ?ShipmentDryIceDetail1  $shipmentDryIceDetail  This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
     * @param  ?InternationalControlledExportDetail  $internationalControlledExportDetail  Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
     * @param  ?HomeDeliveryPremiumDetail  $homeDeliveryPremiumDetail  These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
        public readonly ?EtdDetail $etdDetail = null,
        public readonly ?DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null,
        public readonly ?InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null,
        public readonly ?HoldAtLocationDetail $holdAtLocationDetail = null,
        public readonly ?ShipmentCodDetail $shipmentCodDetail = null,
        public readonly ?ShipmentDryIceDetail1 $shipmentDryIceDetail = null,
        public readonly ?InternationalControlledExportDetail $internationalControlledExportDetail = null,
        public readonly ?HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null,
    ) {
    }
}
