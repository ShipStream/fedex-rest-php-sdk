<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItemPackageSpecialServicesCodDetail extends Dto
{
    /**
     * @param  ?TransitTimeRequestedPackageLineItemPackageSpecialServicesCodDetailCodCollectionAmount  $codCollectionAmount  Optional, but if indicated 'amount' and 'currency' must be provided.
     */
    public function __construct(
        public readonly ?TransitTimeRequestedPackageLineItemPackageSpecialServicesCodDetailCodCollectionAmount $codCollectionAmount = null,
    ) {
    }
}
