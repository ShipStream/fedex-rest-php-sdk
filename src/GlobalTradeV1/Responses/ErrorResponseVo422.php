<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Responses;

use ShipStream\FedEx\GlobalTradeV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo422 extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError::class]];

    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  CxsError[]|null  $errors
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
