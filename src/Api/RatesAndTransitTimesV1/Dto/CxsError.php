<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example:<br>ACCOUNT.NUMBER.MISMATCH<br>
     * @param  Parameter[]|null  $parameterList  List of parameters which indicates the properties of the alert message.
     * @param  ?string  $message  Indicates the description of error alert message.<br>Example: When payment Type is SENDER, ShippingChargesPayment Payor AccountNumber should match the shipper account number.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
