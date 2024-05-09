<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError422 extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: INVALID.INPUT.EXCEPTION
     * @param  Parameter[]|null  $parameterList
     * @param  ?string  $message  Validation failed for the object='shipmentRegulatoryDetailsInputVO'.Error count:1
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
