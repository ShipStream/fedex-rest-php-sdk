<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsAlert extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Specifies the API alert code.
     * @param  ?string  $alertType  Specifies the API alert type.
     * @param  Parameter[]|null  $parameterList
     * @param  ?string  $message  Specifies the API alert message.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $alertType = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
