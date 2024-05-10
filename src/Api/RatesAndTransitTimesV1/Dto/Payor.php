<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Payor extends Dto
{
    /**
     * @param  ?string  $responsibleParty  These are payer details such as address, account and contacts.
     */
    public function __construct(
        public readonly ?string $responsibleParty = null,
    ) {
    }
}
