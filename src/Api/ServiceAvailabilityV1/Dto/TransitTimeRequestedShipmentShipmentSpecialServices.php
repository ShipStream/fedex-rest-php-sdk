<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipmentSpecialServices extends Dto
{
    /**
     * @param  ?string[]  $specialServiceTypes  Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesCodDetail  $codDetail  Use this object to specify Collect On Delivery (COD) shipment details.
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail  $internationalControlledExportDetail  Use this object to specify International Controlled Export shipment Details.
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail  $homeDeliveryPremiumDetail  These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail  $holdAtLocationDetail  Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail  $shipmentDryIceDetail  Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesCodDetail $codDetail = null,
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesInternationalControlledExportDetail $internationalControlledExportDetail = null,
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null,
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesHoldAtLocationDetail $holdAtLocationDetail = null,
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesShipmentDryIceDetail $shipmentDryIceDetail = null,
    ) {
    }
}
