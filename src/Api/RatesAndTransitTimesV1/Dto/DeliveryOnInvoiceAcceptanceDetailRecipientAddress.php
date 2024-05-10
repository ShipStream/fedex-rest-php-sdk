<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOnInvoiceAcceptanceDetailRecipientAddress extends Dto
{
    /**
     * @param  string  $countryCode  The two-letter country code. <br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string[]  $streetLines  This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     */
    public function __construct(
        public readonly string $countryCode,
        public readonly ?array $streetLines = null,
    ) {
    }
}
