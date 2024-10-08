<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

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
        public ?string $division = null,
        public ?string $companyCd = null,
        public ?string $name = null,
        public ?string $department = null,
        public ?string $storeId = null,
    ) {}
}
