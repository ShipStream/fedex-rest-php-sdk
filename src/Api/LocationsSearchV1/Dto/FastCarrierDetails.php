<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class FastCarrierDetails extends Dto
{
    /**
     * @param  ?string  $serviceType  Specifies the service type.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $serviceCategory  The service category for which this capability applies.
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?string $serviceCategory = null,
    ) {
    }
}
