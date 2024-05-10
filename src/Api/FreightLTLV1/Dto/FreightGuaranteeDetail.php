<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightGuaranteeDetail extends Dto
{
    /**
     * @param  ?string  $freightGuaranteeType  Indicates the guaranteed delivery on date specified.
     * @param  ?string  $guaranteeTimestamp  Date and Time of shipment based on shipper’s time zone. <br>The format is YYYY-MM-DD
     */
    public function __construct(
        public readonly ?string $freightGuaranteeType = null,
        public readonly ?string $guaranteeTimestamp = null,
    ) {
    }
}
