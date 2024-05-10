<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError2 extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: TRACKING.TRACKINGNUMBER.EMPTY
     * @param  Parameter[]|null  $parameterList  List of parameters.
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: Please provide tracking number.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
