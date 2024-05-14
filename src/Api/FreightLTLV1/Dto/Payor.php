<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Payor extends Dto
{
    /**
     * @param  Party2  $responsibleParty  Use this object to provide the attributes such as physical address, contact information and account number information.
     */
    public function __construct(
        public readonly Party2 $responsibleParty,
    ) {
    }
}
