<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyCreatePickupLtl extends Dto
{
    /**
     * @param  ?ContactCreatePickup  $contact  Indicates the contact details for the party such as name, phonenumber.
     * @param  ?AddressLtl  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?PartyAccountNumber  $accountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     * @param  ?string  $deliveryInstructions  Indicates the detailed instructions for delivery.This is used with Ground Home Delivery.
     */
    public function __construct(
        public readonly ?ContactCreatePickup $contact = null,
        public readonly ?AddressLtl $address = null,
        public readonly ?PartyAccountNumber $accountNumber = null,
        public readonly ?string $deliveryInstructions = null,
    ) {
    }
}
