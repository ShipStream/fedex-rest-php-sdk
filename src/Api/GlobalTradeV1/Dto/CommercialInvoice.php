<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CommercialInvoice extends Dto
{
    /**
     * @param  ?Money  $freightCharge  Customs value for this commodity.
     * @param  ?string  $purpose  It describes the purpose.
     */
    public function __construct(
        public readonly ?Money $freightCharge = null,
        public readonly ?string $purpose = null,
    ) {
    }
}
