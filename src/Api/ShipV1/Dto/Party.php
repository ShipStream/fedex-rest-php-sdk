<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Party extends Dto
{
    protected static array $complexArrayTypes = ['tins' => [TaxpayerIdentification::class]];

    /**
     * @param  ?Address  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?Contact  $contact  Indicate the contact details of the shipper.
     * @param  ?PartyAccountNumber  $accountNumber  The account number of the recipient.
     * @param  TaxpayerIdentification[]|null  $tins  This is the tax identification number details.
     */
    public function __construct(
        public readonly ?Address $address = null,
        public readonly ?Contact $contact = null,
        public readonly ?PartyAccountNumber $accountNumber = null,
        public readonly ?array $tins = null,
    ) {
    }
}
