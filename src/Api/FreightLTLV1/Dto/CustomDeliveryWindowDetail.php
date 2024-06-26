<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomDeliveryWindowDetail extends Dto
{
    /**
     * @param  ?string  $requestDate  Indicates the date requested. Only used if Type is ON, BEFORE or AFTER<br>Example: 2023-05-15
     * @param  ?string  $requestTime  Indicates the time requested.<br>Example: 10:00:00
     * @param  ?RetrieveDateRange  $requestRange  Range of dates for custom delivery request.Only used if type is BETWEEN.
     * @param  ?string  $type  Indicates the type of shipment.<br>Example: AFTER
     */
    public function __construct(
        public readonly ?string $requestDate = null,
        public readonly ?string $requestTime = null,
        public readonly ?RetrieveDateRange $requestRange = null,
        public readonly ?string $type = null,
    ) {
    }
}
