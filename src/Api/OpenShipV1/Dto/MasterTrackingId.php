<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class MasterTrackingId extends Dto
{
    /**
     * @param  ?string  $formId  This is FedEx tracking Identifier associated with the package.<br>Example: 8600
     * @param  ?string  $trackingIdType  Specify the FedEx transportation type. <br>Example: EXPRESS
     * @param  ?string  $uspsApplicationId  Specify the USPS tracking Identifier associated with FedEx SmartPost shipment.<br>Example: 92
     * @param  ?string  $trackingNumber  This is a number associated with a package that is used to track it.For child shipment of an oneLabelAtATime shipments,this should be same as the masterTrackingNumber of the parent shipment. <br>Example: 49XXX0000XXX20032835
     */
    public function __construct(
        public readonly ?string $formId = null,
        public readonly ?string $trackingIdType = null,
        public readonly ?string $uspsApplicationId = null,
        public readonly ?string $trackingNumber = null,
    ) {
    }
}
