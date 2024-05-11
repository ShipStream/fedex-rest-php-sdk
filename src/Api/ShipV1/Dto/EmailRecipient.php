<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailRecipient extends Dto
{
    /**
     * @param  string  $emailAddress  This is recipient email address for notifying the return label. Maximum length 200 characters.<br> Example: neena@abc.com
     * @param  string  $role  This is to specify Recipient role in the shipment.Shipment completor role is needed when we pass shipment initiator. We cannot use shipment initiator alone.
     * @param  ?EmailOptionsRequested  $optionsRequested  These are to indicate how the email notifications for the pending shipment to be processed.
     * @param  ?string  $locale  These are locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     */
    public function __construct(
        public readonly string $emailAddress,
        public readonly string $role,
        public readonly ?EmailOptionsRequested $optionsRequested = null,
        public readonly ?string $locale = null,
    ) {
    }
}
