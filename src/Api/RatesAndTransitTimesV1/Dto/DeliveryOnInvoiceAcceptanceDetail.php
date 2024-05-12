<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOnInvoiceAcceptanceDetail extends Dto
{
    /**
     * @param  ?Party2  $recipient  Indicate the party to a transaction including the physical address, contact information and account number information.
     */
    public function __construct(
        public readonly ?Party2 $recipient = null,
    ) {
    }
}
