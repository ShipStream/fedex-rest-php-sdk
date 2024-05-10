<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServicesRequested extends Dto
{
    /**
     * @param  ?InternationalControlledExportDetail  $internationalControlledExportDetail  Use this object to specify International Controlled Export shipment Details.<br>Example: WAREHOUSE_WITHDRAWAL.
     * @param  ?ReturnShipmentDetail  $returnShipmentDetail  Indicates the return shipment.
     * @param  ?HomeDeliveryPremiumDetail  $homeDeliveryPremiumDetail  These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
     * @param  ?ReturnEmailDetail  $returnEmailDetail  These are Email details for the return shipment.
     * @param  ?string[]  $specialServiceTypes  Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     * @param  ?SaturdayDeliveryDetail  $saturdayDeliveryDetail  These are service elements for Saturday Delivery special service.
     * @param  ?HoldAtLocationDetail  $holdAtLocationDetail  Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
     * @param  ?string  $codDetail  Conditional <br>
     *                              For Express-only COD, populate this object for COD detail information at the shipment level.  When data is provided in this object, the related COD enum will be populated automatically by RATC
     * @param  ?string  $shipmentDryIceDetail  This is the descriptive data required for the FedEx shipment containing dangerous materials. This element is required when SpecialServicetype DRY_ICE is selected in SpecialServicetype collection.
     * @param  ?FreightDirectDetail  $freightDirectDetail  Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     */
    public function __construct(
        public readonly ?InternationalControlledExportDetail $internationalControlledExportDetail = null,
        public readonly ?ReturnShipmentDetail $returnShipmentDetail = null,
        public readonly ?HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null,
        public readonly ?ReturnEmailDetail $returnEmailDetail = null,
        public readonly ?array $specialServiceTypes = null,
        public readonly ?SaturdayDeliveryDetail $saturdayDeliveryDetail = null,
        public readonly ?HoldAtLocationDetail $holdAtLocationDetail = null,
        public readonly ?string $codDetail = null,
        public readonly ?string $shipmentDryIceDetail = null,
        public readonly ?FreightDirectDetail $freightDirectDetail = null,
    ) {
    }
}
