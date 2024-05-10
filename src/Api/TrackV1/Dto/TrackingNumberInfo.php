<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingNumberInfo extends Dto
{
    /**
     * @param  string  $trackingNumber  This is a Tracking number for FedEx packages used for tracking a single package or group of packages. <br> Example: 128667043726<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see Mock Tracking Numbers.</a>
     * @param  ?string  $carrierCode  This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. <br> Example: FDXE
     * @param  ?string  $trackingNumberUniqueId  Unique identifier used to distinguish duplicate FedEx tracking numbers. This value will be set by FedEx systems. <br> Example: 245822\~123456789012\~FDEG
     */
    public function __construct(
        public readonly string $trackingNumber,
        public readonly ?string $carrierCode = null,
        public readonly ?string $trackingNumberUniqueId = null,
    ) {
    }
}
