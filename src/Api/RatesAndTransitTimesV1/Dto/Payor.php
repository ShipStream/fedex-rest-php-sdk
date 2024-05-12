<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Payor extends Dto
{
    /**
     * @param  ?Party2  $responsibleParty  Indicate the party to a transaction including the physical address, contact information and account number information.
     */
    public function __construct(
        public readonly ?Party2 $responsibleParty = null,
    ) {
    }
}
