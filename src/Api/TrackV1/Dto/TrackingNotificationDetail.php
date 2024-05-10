<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingNotificationDetail extends Dto
{
    /**
     * @param  Localization  $localization  Specifies the language details for email notification.
     * @param  EmailDetail  $emailDetail  Specifies the Email Notification Details.
     * @param  string  $notificationType  Identifies the format of the notification. <br>valid values are 'HTML' or 'TEXT'.
     */
    public function __construct(
        public readonly Localization $localization,
        public readonly EmailDetail $emailDetail,
        public readonly string $notificationType,
    ) {
    }
}
