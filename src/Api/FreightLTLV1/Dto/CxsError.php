<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: ACCOUNTNUMBER.REGISTRATION.REQUIRED, LOGIN.REAUTHENTICATE.ERROR, UNAUTHORIZED.USAGE, NOT.FOUND.ERROR, INTERNAL.SERVER.ERROR, SERVICE.UNAVAILABLE.ERROR
     * @param  Parameter[]|null  $parameterList
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: Please enter a valid 9-digit FedEx account number or register for a new FedEx account number.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
