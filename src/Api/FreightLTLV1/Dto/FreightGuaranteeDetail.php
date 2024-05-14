<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightGuaranteeDetail extends Dto
{
    /**
     * @param  string  $freightGuaranteeType  Specify how the freight has been guaranteed for delivery.
     * @param  string  $guaranteeTimestamp  Specify the time of shipment based on shippers time zone.<br>Example: 2009-04-12
     */
    public function __construct(
        public readonly string $freightGuaranteeType,
        public readonly string $guaranteeTimestamp,
    ) {
    }
}
