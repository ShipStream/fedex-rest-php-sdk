<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CommercialInvoice extends Dto
{
    /**
     * @param  ?Money  $freightCharge  Specify Insurance charges if applicable.<br><i>Note: FedEx does not provide insurance of any kind</i>.
     * @param  ?string  $purpose  It describes the purpose.
     */
    public function __construct(
        public readonly ?Money $freightCharge = null,
        public readonly ?string $purpose = null,
    ) {
    }
}
