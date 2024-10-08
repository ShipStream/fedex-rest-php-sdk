<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => Parameter::class];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: SERVICE.UNAVAILABLE.ERROR
     * @param  Parameter[]|null  $parameterList  Indicates error parameters includes parameter key/value pairs.
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: The service is currently unavailable and we are working to resolve the issue. We apologize for any inconvenience. Please check back at a later time.
     */
    public function __construct(
        public ?string $code = null,
        public ?array $parameterList = null,
        public ?string $message = null,
    ) {}
}
