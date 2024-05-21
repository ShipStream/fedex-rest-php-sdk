<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Responses;

use ShipStream\FedEx\Api\PickupRequestV1\Dto\CxsError401;
use ShipStream\FedEx\Response;

final class ErrorResponseVo extends Response
{
    protected static array $complexArrayTypes = ['errors' => [CxsError401::class]];

    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 6f821609-aeb6-4ffe-b783-6e60b20f2801
     * @param  ?string  $customerTransactionId  "This element allows you to assign a unique identifier to your transaction.  This element is also returned in the reply and help you match the request to the reply <br> Example : AnyCo_order123456789"
     * @param  CxsError401[]|null  $errors
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
