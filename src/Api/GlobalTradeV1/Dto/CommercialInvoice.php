<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CommercialInvoice extends Dto
{
    /**
     * @param  ?mixed[]  $freightCharge  Indicate the freight charge.
     * @param  ?string  $purpose  It describes the purpose.
     */
    public function __construct(
        public readonly ?array $freightCharge = null,
        public readonly ?string $purpose = null,
    ) {
    }
}
