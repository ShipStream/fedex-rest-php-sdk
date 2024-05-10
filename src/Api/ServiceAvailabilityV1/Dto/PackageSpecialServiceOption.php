<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageSpecialServiceOption extends Dto
{
    /**
     * @param  ?string  $customerIntegrationMode  Specifies customer integration mode.
     * @param  ?string  $subType  Specifies sub-type of the special service option.
     * @param  ?string  $specialServiceType  Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     */
    public function __construct(
        public readonly ?string $customerIntegrationMode = null,
        public readonly ?string $subType = null,
        public readonly ?string $specialServiceType = null,
    ) {
    }
}
