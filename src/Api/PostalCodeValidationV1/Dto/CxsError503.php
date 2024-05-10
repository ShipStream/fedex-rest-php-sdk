<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PostalCodeValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError503 extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: SERVICE.UNAVAILABLE.ERROR
     * @param  Parameter[]|null  $parameterList  List of parameters which indicates the properties of the alert message.
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: The service is currently unavailable and we are working to resolve the issue. We apologize for any inconvenience. Please check back at a later time.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}