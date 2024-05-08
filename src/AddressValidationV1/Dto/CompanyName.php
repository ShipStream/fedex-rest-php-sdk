<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class CompanyName extends Dto
{
    /**
     * @param  string  $name  Name of the company
     * @param  ?string  $division  Division of the company
     * @param  ?string  $companyCd  Unique company code for the company
     * @param  ?string  $department  Departments of the company
     * @param  ?string  $storeId  storeId for the company
     */
    public function __construct(
        public readonly string $name,
        public readonly ?string $division = null,
        public readonly ?string $companyCd = null,
        public readonly ?string $department = null,
        public readonly ?string $storeId = null,
    ) {
    }
}
