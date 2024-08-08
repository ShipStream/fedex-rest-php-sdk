<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAncillaryDetail extends Dto
{
    protected static array $complexArrayTypes = ['emailAddresses' => EMailDetail::class];

    /**
     * @param  EMailDetail[]|null  $emailAddresses  Email Addresses
     */
    public function __construct(
        public readonly ?array $emailAddresses = null,
    ) {
    }
}
