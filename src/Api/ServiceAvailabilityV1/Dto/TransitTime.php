<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTime extends Dto
{
    protected static array $complexArrayTypes = ['transitTimeDetails' => TransitTimeDetail::class];

    /**
     * @param  TransitTimeDetail[]|null  $transitTimeDetails  Specifies the details regarding transit times.
     */
    public function __construct(
        public ?array $transitTimeDetails = null,
    ) {}
}
