<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Party22 extends Dto
{
    protected static array $complexArrayTypes = ['tins' => [TaxpayerIdentification::class]];

    /**
     * @param  ?Address12  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     * @param  ?Contact1  $contact  Indicate the contact details of the shipper.
     * @param  ?PartyAccountNumber  $accountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     * @param  TaxpayerIdentification[]|null  $tins  This is the tax identification number details.
     */
    public function __construct(
        public readonly ?Address12 $address = null,
        public readonly ?Contact1 $contact = null,
        public readonly ?PartyAccountNumber $accountNumber = null,
        public readonly ?array $tins = null,
    ) {
    }
}
