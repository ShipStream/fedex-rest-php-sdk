<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailNotificationRecipient extends Dto
{
    /**
     * @param  string  $emailNotificationRecipientType  Specify the recipient type for email notification.
     * @param  ?string  $name  Specify the recipient name.<br>Example: Joe Smith
     * @param  ?string  $emailAddress  Specify the recipient email address.<br>Example: xyz@aol.com
     * @param  ?string  $notificationFormatType  This is the format for the email notification. Either HTML or plain text can be provided.
     * @param  ?string  $notificationType  Indicate the type of notification that will be sent as an email.
     * @param  ?string  $locale  These are the locale details for email.<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     * @param  ?string[]  $notificationEventType  These are to specify the notification event types.<br> Example: [ON_PICKUP_DRIVER_ARRIVED, ON_SHIPMENT]<br><a onclick='loadDocReference("notificationeventtypes")'>Click here for more information on Notification Event Types.</a>
     */
    public function __construct(
        public readonly string $emailNotificationRecipientType,
        public readonly ?string $name = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $notificationFormatType = null,
        public readonly ?string $notificationType = null,
        public readonly ?string $locale = null,
        public readonly ?array $notificationEventType = null,
    ) {
    }
}
