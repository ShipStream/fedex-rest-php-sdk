<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailNotificationRecipient extends Dto
{
    /**
     * @param  string  $emailAddress  Identifies the email address associated with this contact.
     * @param  ?string[]  $notificationEventType  Specifies notification event type.
     * @param  ?string  $smsDetail  Specifies the SMS notification details.<br>Conditionally required for SMS notifications.
     * @param  ?string  $notificationFormatType  Specifies Notification Format Type.
     * @param  ?string  $emailNotificationRecipientType  Required Email Notification Recipient Type.
     * @param  ?string  $notificationType  Specifies the type of the notification received.
     * @param  ?string  $locale  Specify the locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>Click here to see the list of available locales<br></a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     */
    public function __construct(
        public readonly string $emailAddress,
        public readonly ?array $notificationEventType = null,
        public readonly ?string $smsDetail = null,
        public readonly ?string $notificationFormatType = null,
        public readonly ?string $emailNotificationRecipientType = null,
        public readonly ?string $notificationType = null,
        public readonly ?string $locale = null,
    ) {
    }
}
