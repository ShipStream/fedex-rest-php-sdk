<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class SoldToParty extends Dto
{
    protected static array $complexArrayTypes = ['tins' => TaxpayerIdentification::class];

    /**
     * @param  ?PartyAddress  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?PartyContact  $contact  Indicate the contact details for this shipment.
     * @param  TaxpayerIdentification[]|null  $tins  Used for adding the tax id
     * @param  ?PartyAccountNumber  $accountNumber  This is FedEx Account number details.
     */
    public function __construct(
        public ?PartyAddress $address = null,
        public ?PartyContact $contact = null,
        public ?array $tins = null,
        public ?PartyAccountNumber $accountNumber = null,
    ) {}
}
