<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class SendNotificationOutputVo extends Dto
{
    protected static array $attributeMap = ['trackingNumberInfo' => 'TrackingNumberInfo'];

    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?TrackingNumberInfo2  $trackingNumberInfo  Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     * @param  ?AddressVo  $destinationAddress  Address where the package was actually delivered. Contrast with destinationAddress, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a behavior, hold at FedEx location, etc.
     * @param  string[][]|null  $recipientDetails  Details of the recipient notification events. Possible events are - ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER.
     * @param  Alert[]|null  $alerts  The cxs alert type, alert code, and alert messages.<br>Example: example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     */
    public function __construct(
        public readonly ?TrackingNumberInfo2 $trackingNumberInfo = null,
        public readonly ?AddressVo $destinationAddress = null,
        public readonly ?array $recipientDetails = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
