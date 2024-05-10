<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingId extends Dto
{
    /**
     * @param  ?int  $formId  This is FedEx tracking Identifier associated with the package.<br>Example: 8600
     * @param  ?string  $trackingIdType  Specify the FedEx transportation type. <br>Example: EXPRESS
     * @param  ?int  $uspsApplicationId  Specify the USPS tracking Identifier associated with FedEx SmartPost shipment.<br>Example: 92
     * @param  ?string  $trackingNumber  This is a number associated with a package that is used to track it. <br>Example: 49XXX0000XXX20032835
     */
    public function __construct(
        public readonly ?int $formId = null,
        public readonly ?string $trackingIdType = null,
        public readonly ?int $uspsApplicationId = null,
        public readonly ?string $trackingNumber = null,
    ) {
    }
}
