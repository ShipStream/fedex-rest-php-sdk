<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlRateParty extends Dto
{
    /**
     * @param  Address  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     * @param  ?LtlFreightAccountNumber  $accountNumber  This is the Account number details.
     */
    public function __construct(
        public readonly Address $address,
        public readonly ?LtlFreightAccountNumber $accountNumber = null,
    ) {
    }
}
