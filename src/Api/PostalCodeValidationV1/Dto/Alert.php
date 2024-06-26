<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PostalCodeValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Alert extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Specifies the API alert code.<br>Example: CITYNAME.POSTALCODE.REQUIRED
     * @param  ?string  $alertType  Specifies the alert type.
     * @param  Parameter[]|null  $parameterList  List of parameters which indicates the properties of the alert message.
     * @param  ?string  $message  This is the alert message. <br> Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $alertType = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
