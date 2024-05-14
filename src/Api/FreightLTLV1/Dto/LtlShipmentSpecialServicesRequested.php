<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlShipmentSpecialServicesRequested extends Dto
{
    /**
     * @param  ?FreightGuaranteeDetail  $freightGuaranteeDetail  Indicates the details of freight guarantee.
     * @param  ?string[]  $specialServiceTypes  Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     * @param  ?FreightDirectDetail  $freightDirectDetail  Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     */
    public function __construct(
        public readonly ?FreightGuaranteeDetail $freightGuaranteeDetail = null,
        public readonly ?array $specialServiceTypes = null,
        public readonly ?FreightDirectDetail $freightDirectDetail = null,
    ) {
    }
}
