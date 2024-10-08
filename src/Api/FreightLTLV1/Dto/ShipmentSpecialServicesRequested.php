<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServicesRequested extends Dto
{
    /**
     * @param  ?ShipmentSpecialServicesRequestedFreightGuaranteeDetail  $freightGuaranteeDetail  Specifies the freight guarantee detail.
     * @param  ?ShipmentSpecialServicesRequestedFreightDirectDetail  $freightDirectDetail  Specifies the freight Direct Detail.It is used for Fedex Freight Direct. Maximum of two Freight direct details are accepted.
     * @param  ?string[]  $specialServiceTypes  Special services requested for the shipment.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     */
    public function __construct(
        public ?ShipmentSpecialServicesRequestedFreightGuaranteeDetail $freightGuaranteeDetail = null,
        public ?ShipmentSpecialServicesRequestedFreightDirectDetail $freightDirectDetail = null,
        public ?array $specialServiceTypes = null,
    ) {}
}
