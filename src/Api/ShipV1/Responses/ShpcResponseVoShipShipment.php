<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Responses;

use ShipStream\FedEx\Api\ShipV1\Dto\ShipShipmentOutputVo;
use ShipStream\FedEx\Response;

final class ShpcResponseVoShipShipment extends Response
{
    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?string  $customerTransactionId  This element has a unique identifier added in your request, helps you match the request to the reply.<br>Example: XXXX_XXX123XXXXX
     * @param  ?ShipShipmentOutputVo  $output  This is the response received when a shipment is requested.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?ShipShipmentOutputVo $output = null,
    ) {
    }
}
