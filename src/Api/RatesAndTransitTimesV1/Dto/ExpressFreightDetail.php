<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ExpressFreightDetail extends Dto
{
    /**
     * @param  ?string  $bookingConfirmationNumber  An advance booking number is optional for FedEx 1Day Freight. When you call 1.800.332.0807 to book your freight shipment, you will receive a booking number. This booking number is included in the Ship request, and prints on the shipping label
     * @param  ?int  $shippersLoadAndCount  Describes the shippers loaded total package counts.
     */
    public function __construct(
        public readonly ?string $bookingConfirmationNumber = null,
        public readonly ?int $shippersLoadAndCount = null,
    ) {
    }
}
