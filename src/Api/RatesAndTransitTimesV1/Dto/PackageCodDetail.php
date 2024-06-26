<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageCodDetail extends Dto
{
    /**
     * @param  ?Money  $codCollectionAmount  Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
     * @param  ?string  $codCollectionType  Indicate the type of funds FedEx should collect upon shipment delivery. <br> Conditionally required for Ground COD rates
     */
    public function __construct(
        public readonly ?Money $codCollectionAmount = null,
        public readonly ?string $codCollectionType = null,
    ) {
    }
}
