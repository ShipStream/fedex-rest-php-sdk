<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Responses;

use ShipStream\FedEx\Api\ConsolidationV1\Dto\CreateConsolidationOutputVo;
use ShipStream\FedEx\Response;

final class CreateConsolidationResponse extends Response
{
    /**
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?CreateConsolidationOutputVo  $output  This is the response received when a consolidation shipment is requested.
     */
    public function __construct(
        public readonly ?string $customerTransactionId = null,
        public readonly ?string $transactionId = null,
        public readonly ?CreateConsolidationOutputVo $output = null,
    ) {
    }
}
