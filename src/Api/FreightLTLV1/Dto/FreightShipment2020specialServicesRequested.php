<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipment2020specialServicesRequested extends Dto
{
    protected static array $attributeMap = ['shipmentCodDetail' => 'shipmentCODDetail'];

    /**
     * @param  ?string[]  $specialServiceTypes  Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     * @param  ?FreightGuaranteeDetail  $freightGuaranteeDetail  Indicates the details of freight guarantee.
     * @param  ?ShipmentCodDetail  $shipmentCodDetail  This is the shipment level COD detail.
     * @param  ?FreightDirectDetail  $freightDirectDetail  Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     * @param  ?CustomDeliveryWindowDetail  $customDeliveryWindowDetail  Indicates shipment to be sent at a specific time, on a specific date, or sometime within a specific date range.
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
        public readonly ?FreightGuaranteeDetail $freightGuaranteeDetail = null,
        public readonly ?ShipmentCodDetail $shipmentCodDetail = null,
        public readonly ?FreightDirectDetail $freightDirectDetail = null,
        public readonly ?CustomDeliveryWindowDetail $customDeliveryWindowDetail = null,
    ) {
    }
}
