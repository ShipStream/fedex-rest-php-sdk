<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ResponsiblePartyParty extends Dto
{
    /**
     * @param  PartyAccountNumber  $accountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     * @param  ?PartyAddress  $address  Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?PartyContact  $contact  Indicate the contact details for this shipment.
     */
    public function __construct(
        public readonly PartyAccountNumber $accountNumber,
        public readonly ?PartyAddress $address = null,
        public readonly ?PartyContact $contact = null,
    ) {
    }
}
