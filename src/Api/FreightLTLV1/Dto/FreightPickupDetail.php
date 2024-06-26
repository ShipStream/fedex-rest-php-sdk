<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightPickupDetail extends Dto
{
    protected static array $complexArrayTypes = ['lineItems' => [LineItems::class]];

    /**
     * @param  ?FreightAccountNumber  $accountNumber  Indicate the Account number details to be invoiced for freight pickup.
     * @param  ?string  $role  Specifies the role. <br>Example: SHIPPER
     * @param  ?string  $payment  Specifies the payment. <br>Example: SENDER
     * @param  ?Contacts  $submittedBy  Indicates the contact details for the party such as name, email, and phone number.
     * @param  LineItems[]|null  $lineItems  Specifies the list of line items.
     * @param  ?Party  $alternateBilling  Indicate the party to a transaction including the physical address, contact information and account number information.
     * @param  ?string  $userMessage  Specifies the user message that can be sent as part of the pickup confirmation email.<br>Example: This is the user message
     */
    public function __construct(
        public readonly ?FreightAccountNumber $accountNumber = null,
        public readonly ?string $role = null,
        public readonly ?string $payment = null,
        public readonly ?Contacts $submittedBy = null,
        public readonly ?array $lineItems = null,
        public readonly ?Party $alternateBilling = null,
        public readonly ?string $userMessage = null,
    ) {
    }
}
