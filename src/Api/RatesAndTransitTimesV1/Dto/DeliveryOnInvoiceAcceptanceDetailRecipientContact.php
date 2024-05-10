<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOnInvoiceAcceptanceDetailRecipientContact extends Dto
{
    /**
     * @param  string  $companyName  This is a placeholder for company name. Maximum length is 35.
     * @param  string  $personName  This is a placeholder for contact person's name. Maximum Length is 70.
     * @param  string  $phoneNumber  This is a placeholder for phone number associated with this contact. Maximum length is 15.
     * @param  ?string  $faxNumber  This is a placeholder for Fax number. Maximum length is 15.
     */
    public function __construct(
        public readonly string $companyName,
        public readonly string $personName,
        public readonly string $phoneNumber,
        public readonly ?string $faxNumber = null,
    ) {
    }
}
