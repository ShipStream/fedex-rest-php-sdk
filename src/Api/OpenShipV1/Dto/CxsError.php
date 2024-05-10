<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: TRACKINGNUMBER.ENTERED.INVALID
     * @param  Parameter[]|null  $parameterList  Specifies the message parameter list.
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: Error with entered Tracking Number. Please verify the entered Tracking Number.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
