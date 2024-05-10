<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailRecipient extends Dto
{
    /**
     * @param  string  $emailAddress  This is the placeholder for Email address of the end-user to be  notified of the return label. Maximum length is 200 characters.
     * @param  ?EmailOptionsRequested  $optionsRequested  Indicates how the email notifications for the pending shipment need to be processed.
     * @param  ?string  $role  Specifies the role of the recipient to the pending shipment.
     * @param  ?Locale  $locale  These are Locale details.<br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     */
    public function __construct(
        public readonly string $emailAddress,
        public readonly ?EmailOptionsRequested $optionsRequested = null,
        public readonly ?string $role = null,
        public readonly ?Locale $locale = null,
    ) {
    }
}
