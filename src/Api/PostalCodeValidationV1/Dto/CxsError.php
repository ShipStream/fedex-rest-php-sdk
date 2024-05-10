<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PostalCodeValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br> Example:CITYNAME.POSTALCODE.REQUIRED
     * @param  Parameter[]|null  $parameterList  List of parameters which indicates the properties of the alert message.
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: City Name or Postal Code is required.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
