<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeDetail extends Dto
{
    protected static array $complexArrayTypes = ['customerMessages' => [CustomerMessage::class]];

    /**
     * @param  ?string  $serviceType  Type of the service is returned.
     * @param  CustomerMessage[]|null  $customerMessages  These are messages returned in the response.
     * @param  ?Distance  $distance  This is a total distance between origin and destination city centers for freight shipments.
     * @param  ?CommitDetail  $commit  The delivery commitment details.
     * @param  ?LocationDetail  $destinationLocation
     * @param  ?string  $serviceName  Name of service returned.
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?array $customerMessages = null,
        public readonly ?Distance $distance = null,
        public readonly ?CommitDetail $commit = null,
        public readonly ?LocationDetail $destinationLocation = null,
        public readonly ?string $serviceName = null,
    ) {
    }
}
