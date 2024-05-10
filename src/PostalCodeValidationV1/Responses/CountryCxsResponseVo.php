<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PostalCodeValidationV1\Responses;

use ShipStream\FedEx\PostalCodeValidationV1\Dto\ValidatePostalOutputVo;
use ShipStream\FedEx\Response;

final class CountryCxsResponseVo extends Response
{
    /**
     * @param  ?string  $transactionId  The transaction ID is special set of number that allows FedEx customer to assign a unique identifier to their each transaction. Helps in matching requests to reply.<br>Max 40 characters.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     * @param  ?ValidatePostalOutputVo  $output  Indicates data returned in the postal validation reply.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?ValidatePostalOutputVo $output = null,
    ) {
    }
}
