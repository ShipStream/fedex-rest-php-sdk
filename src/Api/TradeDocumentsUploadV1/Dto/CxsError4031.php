<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError4031 extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: FORBIDDEN.ERROR
     * @param  Parameter[]|null  $parameterList
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: We could not authorize your credentials. Please check your permissions and try again
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?array $parameterList = null,
        public readonly ?string $message = null,
    ) {
    }
}
