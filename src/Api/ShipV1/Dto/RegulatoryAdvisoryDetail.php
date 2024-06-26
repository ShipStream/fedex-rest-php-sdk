<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryAdvisoryDetail extends Dto
{
    protected static array $complexArrayTypes = ['prohibitions' => [RegulatoryProhibition::class]];

    /**
     * @param  RegulatoryProhibition[]|null  $prohibitions  It is a regulatory probitions.
     */
    public function __construct(
        public readonly ?array $prohibitions = null,
    ) {
    }
}
