<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipShipmentEmailNotificationDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'emailNotificationRecipients' => [ShipShipmentEmailNotificationRecipient::class],
    ];

    /**
     * @param  ?string  $aggregationType  This is the shipment Notification Aggregation Type.
     * @param  ShipShipmentEmailNotificationRecipient[]|null  $emailNotificationRecipients  These are email notification recipient details.
     * @param  ?string  $personalMessage  This is your personal message for the email.<br>Note: The maximum personal message character limit depends on the element notificationFormatType values:<ul><li>If notificationFormatType is TEXT, then only 120 characters printed on the email</li><li>If notificationFormatType is HTML, then 500 characters printed on the email</li></ul><br>Example: This is concerning the order 123456 of 26 July 2021 - art no 34324-23 Teddy Bear, brown
     */
    public function __construct(
        public readonly ?string $aggregationType = null,
        public readonly ?array $emailNotificationRecipients = null,
        public readonly ?string $personalMessage = null,
    ) {
    }
}
