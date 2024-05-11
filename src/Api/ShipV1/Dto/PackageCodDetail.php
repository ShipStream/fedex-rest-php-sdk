<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageCodDetail extends Dto
{
    /**
     * @param  ?mixed[]  $codCollectionAmount  Indicate the COD collection amount.
     */
    public function __construct(
        public readonly ?array $codCollectionAmount = null,
    ) {
    }
}
