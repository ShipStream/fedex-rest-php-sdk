<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaNotification extends Dto
{
    protected static array $attributeMap = ['senderEmailAddress' => 'senderEMailAddress'];

    /**
     * @param  string  $senderContactName  Placeholder for Sender contact name.<br> Example: Sam Smith
     * @param  string  $senderEmailAddress  Email address of the sender from which the shipment notification will be sent.<br>Example: LSR123@gmail.com
     * @param  TrackingEventNotificationDetail2  $trackingEventNotificationDetail  Tracking Event Notification details.
     * @param  TrackingNumberInfo  $trackingNumberInfo  Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     * @param  ?string  $shipDateBegin  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     * @param  ?string  $shipDateEnd  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number in a specific time range. <br>Format: YYYY-MM-DD<br>example:'2019-10-13'
     */
    public function __construct(
        public readonly string $senderContactName,
        public readonly string $senderEmailAddress,
        public readonly TrackingEventNotificationDetail2 $trackingEventNotificationDetail,
        public readonly TrackingNumberInfo $trackingNumberInfo,
        public readonly ?string $shipDateBegin = null,
        public readonly ?string $shipDateEnd = null,
    ) {
    }
}
