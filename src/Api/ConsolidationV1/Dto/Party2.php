<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Party2 extends Dto
{
    /**
     * @param  Address  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  PartyAccountNumber  $accountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx account number.
     * @param  ?Contact  $contact  Contact details for the Party such as Name, Email, PhoneNumber.
     */
    public function __construct(
        public Address $address,
        public PartyAccountNumber $accountNumber,
        public ?Contact $contact = null,
    ) {}
}
