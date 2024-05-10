<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServicesRequested extends Dto
{
    /**
     * @param  ?ShipmentSpecialServicesRequestedFreightGuaranteeDetail  $freightGuaranteeDetail  Specifies the freight guarantee detail.
     * @param  ?ShipmentSpecialServicesRequestedFreightDirectDetail  $freightDirectDetail  Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     * @param  ?string[]  $specialServiceTypes  Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     */
    public function __construct(
        public readonly ?ShipmentSpecialServicesRequestedFreightGuaranteeDetail $freightGuaranteeDetail = null,
        public readonly ?ShipmentSpecialServicesRequestedFreightDirectDetail $freightDirectDetail = null,
        public readonly ?array $specialServiceTypes = null,
    ) {
    }
}
