<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError401 extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: NOT.AUTHORIZED.ERROR
     * @param  Parameter[]|null  $parameterList
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: Access token expired. Please modify your request and try again.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
