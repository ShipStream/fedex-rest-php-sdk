<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryAdvisoryDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'commodityClarifications' => [CommodityClarificationDetail::class],
        'prohibitions' => [RegulatoryProhibition::class],
    ];

    /**
     * @param  CommodityClarificationDetail[]|null  $commodityClarifications  Indicates the Commodity clarifications.
     * @param  RegulatoryProhibition[]|null  $prohibitions  It is a regulatory probitions.
     */
    public function __construct(
        public readonly ?array $commodityClarifications = null,
        public readonly ?array $prohibitions = null,
    ) {
    }
}
