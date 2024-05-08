<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Responses;

use ShipStream\FedEx\AddressValidationV1\Dto\AddressResolutionOutputVov3;
use ShipStream\FedEx\Response;

final class AdvcResponseVo extends Response
{
    /**
     * @param  ?string  $transactionId  Unique identifier returned in the reply and helps you match the request to the reply.<br>Example: XXX_ORDERXXXX789
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br><br> Example: XXX_ORDERXXXX789
     * @param  ?AddressResolutionOutputVov3  $output  Indicates the resolved address parameters.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?AddressResolutionOutputVov3 $output = null,
    ) {
    }
}
