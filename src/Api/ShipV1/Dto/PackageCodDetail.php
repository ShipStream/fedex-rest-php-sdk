<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageCodDetail extends Dto
{
    /**
     * @param  ?Money  $codCollectionAmount  This customs value is applicable for all items(or units) under the specified commodity
     */
    public function __construct(
        public readonly ?Money $codCollectionAmount = null,
    ) {
    }
}
