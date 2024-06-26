<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PendingShipmentAccessDetail extends Dto
{
    protected static array $complexArrayTypes = ['accessorDetails' => [PendingShipmentAccessorDetail::class]];

    /**
     * @param  PendingShipmentAccessorDetail[]|null  $accessorDetails  Indicates the details about the users who can access the shipment.
     */
    public function __construct(
        public readonly ?array $accessorDetails = null,
    ) {
    }
}
