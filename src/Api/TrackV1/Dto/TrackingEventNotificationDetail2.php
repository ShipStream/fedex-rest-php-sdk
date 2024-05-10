<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingEventNotificationDetail2 extends Dto
{
    protected static array $attributeMap = ['supportHtml' => 'supportHTML'];

    protected static array $complexArrayTypes = ['trackingNotifications' => [TrackingNotification::class]];

    /**
     * @param  TrackingNotification[]  $trackingNotifications  List of Tracking notifications requested for events like ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     * @param  ?string  $personalMessage  An optional message which will be included in the body of the email.
     * @param  ?string  $supportHtml  If value is 'true' then html tags are included in the response date.  If 'false' they are not provided in the response.
     */
    public function __construct(
        public readonly array $trackingNotifications,
        public readonly ?string $personalMessage = null,
        public readonly ?string $supportHtml = null,
    ) {
    }
}
