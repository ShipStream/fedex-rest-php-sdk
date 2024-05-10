<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Responses;

use ShipStream\FedEx\Api\FreightLTLV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo503 extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError::class]];

    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 6f821609-aeb6-4ffe-b783-6e60b20f2801
     * @param  CxsError[]|null  $errors
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
