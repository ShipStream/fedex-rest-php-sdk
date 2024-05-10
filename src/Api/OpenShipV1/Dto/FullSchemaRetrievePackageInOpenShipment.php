<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaRetrievePackageInOpenShipment extends Dto
{
    /**
     * @param  string  $index  This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     * @param  mixed[]  $accountNumber  The account number associated with the shipment. <br>Example: Your account number
     * @param  TrackingId  $trackingId  Indicates the tracking details for the package.
     */
    public function __construct(
        public readonly string $index,
        public readonly array $accountNumber,
        public readonly TrackingId $trackingId,
    ) {
    }
}
