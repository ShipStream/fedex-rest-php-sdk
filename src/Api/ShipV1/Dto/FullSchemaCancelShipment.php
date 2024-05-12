<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCancelShipment extends Dto
{
    /**
     * @param  ShipperAccountNumber  $accountNumber  The account number associated with the shipment.
     * @param  string  $trackingNumber  This is an unique number assigned by FedEx to the packages for tracking.<br>Example: "794953555571"
     * @param  ?bool  $emailShipment  A boolean flag passed by Clients to indicate that whether a shipment is a EMAIL shipment(Pending Shipment) or not. Once a shipment is confirmed, it can no longer be cancelled by having this flag as True.
     * @param  ?string  $senderCountryCode  The two-letter sender Country code(Ex: US, CA, GB..etc).<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $deletionControl  Specifies which packages in a shipment to be canceled<b>DELETE_ALL_PACKAGES</b> which will cancel all tracking numbers associated to the shipment.
     */
    public function __construct(
        public readonly ShipperAccountNumber $accountNumber,
        public readonly string $trackingNumber,
        public readonly ?bool $emailShipment = null,
        public readonly ?string $senderCountryCode = null,
        public readonly ?string $deletionControl = null,
    ) {
    }
}
