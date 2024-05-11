<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Party2 extends Dto
{
    protected static array $complexArrayTypes = ['tins' => [TaxpayerIdentification::class]];

    /**
     * @param  ?Address1  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     * @param  ?Contact1  $contact  Indicate the contact details of the shipper.
     * @param  ?PartyAccountNumber  $accountNumber  This is FedEx Account number details.
     * @param  TaxpayerIdentification[]|null  $tins  This is the tax identification number details.
     */
    public function __construct(
        public readonly ?Address1 $address = null,
        public readonly ?Contact1 $contact = null,
        public readonly ?PartyAccountNumber $accountNumber = null,
        public readonly ?array $tins = null,
    ) {
    }
}
