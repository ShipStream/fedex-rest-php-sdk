<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Responses;

use ShipStream\FedEx\Api\AddressValidationV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError::class]];

    /**
     * @param  ?string  $transactionId  Unique identifier returned in the reply and helps you match the request to the reply.<br>Example: XXX_ORDERXXXX789
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     * @param  CxsError[]|null  $errors  Indicates error alert when suspicious files, potential exploits and viruses found while scanning files, directories and user accounts. This includes code, message and parameters.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
