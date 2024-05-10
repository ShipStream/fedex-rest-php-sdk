<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ServiceSubOptionDetail extends Dto
{
    /**
     * @param  ?string  $smartPostIndiciaType  This identifies the indicia used during rate quote.
     */
    public function __construct(
        public readonly ?string $smartPostIndiciaType = null,
    ) {
    }
}
