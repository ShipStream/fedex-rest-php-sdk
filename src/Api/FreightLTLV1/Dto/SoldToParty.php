<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class SoldToParty extends Dto
{
    protected static array $complexArrayTypes = ['tins' => [TaxpayerIdentification::class]];

    /**
     * @param  ?PartyAddress  $address  Specify detailed Billing Address information for above FedEx Freight Account Number. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?PartyContact  $contact  Indicate the contact details for this shipment.
     * @param  TaxpayerIdentification[]|null  $tins  This is the tax identification number details.
     * @param  ?AccountNumber  $accountNumber  This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     */
    public function __construct(
        public readonly ?PartyAddress $address = null,
        public readonly ?PartyContact $contact = null,
        public readonly ?array $tins = null,
        public readonly ?AccountNumber $accountNumber = null,
    ) {
    }
}
