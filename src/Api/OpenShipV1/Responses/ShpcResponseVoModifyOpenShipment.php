<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Responses;

use ShipStream\FedEx\Api\OpenShipV1\Dto\ModifyOpenShipmentOutputVo;
use ShipStream\FedEx\Response;

final class ShpcResponseVoModifyOpenShipment extends Response
{
    /**
     * @param  ?string  $transactionId  Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     * @param  ?ModifyOpenShipmentOutputVo  $output  The response elements received when a shipment is created.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?ModifyOpenShipmentOutputVo $output = null,
    ) {
    }
}
