<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CompanyName extends Dto
{
    /**
     * @param  ?string  $division  This is division within a company.
     * @param  ?string  $companyCd  This is Company code.
     * @param  ?string  $name  This is company Name.
     * @param  ?string  $department  This is department within a company
     * @param  ?string  $storeId  This is Store identifier within a company.
     */
    public function __construct(
        public readonly ?string $division = null,
        public readonly ?string $companyCd = null,
        public readonly ?string $name = null,
        public readonly ?string $department = null,
        public readonly ?string $storeId = null,
    ) {
    }
}
