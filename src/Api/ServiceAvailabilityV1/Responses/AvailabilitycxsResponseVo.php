<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses;

use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\SpecialServicesOptionsOutputVo;
use ShipStream\FedEx\Response;

final class AvailabilitycxsResponseVo extends Response
{
    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     * @param  ?SpecialServicesOptionsOutputVo  $output  The response elements for the special service availability request.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?SpecialServicesOptionsOutputVo $output = null,
    ) {
    }
}
