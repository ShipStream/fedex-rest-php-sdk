<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailLabelDetail extends Dto
{
    protected static array $complexArrayTypes = ['recipients' => [EmailNotificationRecipient::class]];

    /**
     * @param  EmailNotificationRecipient[]|null  $recipients  The list of recipients for shipment notifications.
     * @param  ?string  $message  customer specified message to be included in the email to the end-user.
     */
    public function __construct(
        public readonly ?array $recipients = null,
        public readonly ?string $message = null,
    ) {
    }
}
