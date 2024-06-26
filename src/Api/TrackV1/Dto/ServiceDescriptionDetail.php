<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ServiceDescriptionDetail extends Dto
{
    /**
     * @param  ?string  $description  Field which holds the text description of the service type of this package.<br> Example: FedEx Freight Economy
     * @param  ?string  $shortDescription  Field which holds the abbreviated text description of the service type of this package.<br> Example: FL
     * @param  ?string  $type  This is the service type.<br> Example: FEDEX_FREIGHT_ECONOMY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $shortDescription = null,
        public readonly ?string $type = null,
    ) {
    }
}
