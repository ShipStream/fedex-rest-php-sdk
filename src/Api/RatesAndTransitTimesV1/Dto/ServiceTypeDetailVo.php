<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ServiceTypeDetailVo extends Dto
{
    /**
     * @param  ?string  $carrierCode  Identifies which carrier is being described.
     * @param  ?string  $description  Description
     * @param  ?string  $serviceName  Service Name
     * @param  ?string  $serviceCategory  Service Category
     */
    public function __construct(
        public readonly ?string $carrierCode = null,
        public readonly ?string $description = null,
        public readonly ?string $serviceName = null,
        public readonly ?string $serviceCategory = null,
    ) {
    }
}
