<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageCodDetail extends Dto
{
    /**
     * @param  ?Money  $codCollectionAmount  Specifies taxes or miscellaneous charge.
     */
    public function __construct(
        public readonly ?Money $codCollectionAmount = null,
    ) {
    }
}
