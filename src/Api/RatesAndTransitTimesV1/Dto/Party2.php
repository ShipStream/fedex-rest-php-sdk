<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Party2 extends Dto
{
    /**
     * @param  ?Address2  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     * @param  ?Contact2  $contact  Indicate the contact details.
     * @param  ?AccountNumber  $accountNumber  This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     */
    public function __construct(
        public readonly ?Address2 $address = null,
        public readonly ?Contact2 $contact = null,
        public readonly ?AccountNumber $accountNumber = null,
    ) {
    }
}
