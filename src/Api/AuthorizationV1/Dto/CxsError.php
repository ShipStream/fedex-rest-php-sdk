<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AuthorizationV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: NOT.FOUND.ERROR
     * @param  Parameter[]|null  $parameterList  List of parameters which indicates the properties of the alert message.
     * @param  ?string  $message  Indicates the API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
