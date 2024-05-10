<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyShipper extends Dto
{
    /**
     * @param  Address  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
     * @param  ?Contact  $contact  Indicate the contact details for this shipment.
     * @param  ?mixed[]  $accountNumber  Specify the Account number.
     * @param  ?mixed[]  $referenceInfo
     * @param  ?string  $deliveryInstructions  Optional. Provides delivery instructions.  MaxLength is 90.
     * @param  ?mixed[]  $productInfo  optional information aboutsender/recipient including Address, Contact, Account, TIN, DeliveryInstructions, Piece, ReferenceInfo, ProductInfo.
     */
    public function __construct(
        public readonly Address $address,
        public readonly ?Contact $contact = null,
        public readonly ?array $accountNumber = null,
        public readonly ?array $referenceInfo = null,
        public readonly ?string $deliveryInstructions = null,
        public readonly ?array $productInfo = null,
    ) {
    }
}
