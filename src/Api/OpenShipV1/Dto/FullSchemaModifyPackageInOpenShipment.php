<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaModifyPackageInOpenShipment extends Dto
{
    /**
     * @param  mixed[]  $requestedPackageLineItem  Contains the data for the package that is to be modified in the open shipment.
     * @param  string  $index  This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     * @param  mixed[]  $accountNumber  The account number associated with the shipment. <br>Example: Your account number
     * @param  TrackingId  $trackingId  Indicates the tracking details for the package.
     * @param  ?string  $shipAction  Allowed values are STRONG_VALIDATION
     */
    public function __construct(
        public readonly array $requestedPackageLineItem,
        public readonly string $index,
        public readonly array $accountNumber,
        public readonly TrackingId $trackingId,
        public readonly ?string $shipAction = null,
    ) {
    }
}
