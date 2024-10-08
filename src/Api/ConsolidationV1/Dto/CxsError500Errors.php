<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError500Errors extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => Parameter::class];

    /**
     * @param  ?string  $code  Indicates the error code.
     * @param  ?string  $message  Indicates the description of API error alert message.
     * @param  Parameter[]|null  $parameterList
     */
    public function __construct(
        public ?string $code = null,
        public ?string $message = null,
        public ?array $parameterList = null,
    ) {}
}
