<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedShipmentShipmentSpecialServicesCodDetail extends Dto
{
    /**
     * @param  ?TransitTimeRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount  $codCollectionAmount  Amount to be charged for COD collection
     * @param  ?string  $codCollectionType  Indicate the type of funds FedEx should collect upon shipment delivery.
     */
    public function __construct(
        public readonly ?TransitTimeRequestedShipmentShipmentSpecialServicesCodDetailCodCollectionAmount $codCollectionAmount = null,
        public readonly ?string $codCollectionType = null,
    ) {
    }
}
