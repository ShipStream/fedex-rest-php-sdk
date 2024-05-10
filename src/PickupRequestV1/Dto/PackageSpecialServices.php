<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageSpecialServices extends Dto
{
    /**
     * @param  ?string[]  $specialServiceTypes  Specifies special service types.<br>Example: DANGEROUS_GOODS<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
    ) {
    }
}
