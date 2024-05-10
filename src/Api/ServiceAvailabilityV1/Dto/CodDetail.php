<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CodDetail extends Dto
{
    /**
     * @param  Money  $codCollectionAmount  Optional, but if indicated 'amount' and 'currency' must be provided.
     * @param  ?string  $codCollectionType  Identifies the type of funds FedEx should collect upon shipment delivery.
     */
    public function __construct(
        public readonly Money $codCollectionAmount,
        public readonly ?string $codCollectionType = null,
    ) {
    }
}
