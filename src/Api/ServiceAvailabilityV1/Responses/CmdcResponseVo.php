<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses;

use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\PackageAndServiceOptionsOutputVo;
use ShipStream\FedEx\Response;

final class CmdcResponseVo extends Response
{
    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     * @param  ?PackageAndServiceOptionsOutputVo  $output  This is the output response details of Service and Packaging Option request.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?PackageAndServiceOptionsOutputVo $output = null,
    ) {
    }
}
