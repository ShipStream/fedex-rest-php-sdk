<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CreateTagOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => [Alert::class]];

    /**
     * @param  ?string  $masterTrackingNumber  Specifies the Master Tracking Number for the requested shipment.<br>Example: 997338100007320
     * @param  ?string  $serviceType  Specifies the service type for this shipment.<br>Example: GROUND_HOME_DELIVERY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $shipTimestamp  Specifies the shipment date and time. The default timestamp is the current date-time. Format is MMM-dd-yyyy.<br>Example: 2019-10-04
     * @param  ?CompletedTagDetail2  $completedTagDetail
     * @param  Alert[]|null  $alerts  The alerts received when processing a shipment request.
     */
    public function __construct(
        public readonly ?string $masterTrackingNumber = null,
        public readonly ?string $serviceType = null,
        public readonly ?string $shipTimestamp = null,
        public readonly ?CompletedTagDetail2 $completedTagDetail = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
