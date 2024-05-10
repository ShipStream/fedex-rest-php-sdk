<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentAdvisoryDetails extends Dto
{
    /**
     * @param  ?RegulatoryAdvisoryDetail  $regulatoryAdvisory  Indicates the regulatory advisory details.
     */
    public function __construct(
        public readonly ?RegulatoryAdvisoryDetail $regulatoryAdvisory = null,
    ) {
    }
}
