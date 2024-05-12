<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCancelFreightPickup extends Dto
{
    /**
     * @param  PartyAccountNumber  $associatedAccountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     * @param  string  $pickupConfirmationCode  The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: XXXX1007MEM62XXXX.
     * @param  string  $reason  Specify the reason for cancellation of pickup.
     * @param  string  $contactName  Specify the contact name.
     * @param  ?string  $remarks  Specify the additional information to be passed on the pickup courier.
     * @param  ?string  $scheduledDate  Specifies the date when pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     */
    public function __construct(
        public readonly PartyAccountNumber $associatedAccountNumber,
        public readonly string $pickupConfirmationCode,
        public readonly string $reason,
        public readonly string $contactName,
        public readonly ?string $remarks = null,
        public readonly ?string $scheduledDate = null,
    ) {
    }
}
