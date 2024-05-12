<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Responses;

use ShipStream\FedEx\Api\ShipV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo5002 extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError::class]];

    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     * @param  CxsError[]|null  $errors
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}