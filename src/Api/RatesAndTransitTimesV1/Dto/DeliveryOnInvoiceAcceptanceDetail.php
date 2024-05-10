<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOnInvoiceAcceptanceDetail extends Dto
{
    /**
     * @param  ?string  $recipient
     */
    public function __construct(
        public readonly ?string $recipient = null,
    ) {
    }
}
