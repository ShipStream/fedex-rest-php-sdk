<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: ACCOUNT.NUMBER.INVALID,LOGIN.REAUTHENTICATE.ERROR,SHIPMENT.USER.UNAUTHORIZED,NOT.FOUND.ERROR,INTERNAL.SERVER.ERROR
     * @param  Parameter[]|null  $parameterList
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
