<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class DocTabContentZone extends Dto
{
    protected static array $complexArrayTypes = ['docTabZoneSpecifications' => [DocTabZoneSpecification::class]];

    /**
     * @param  DocTabZoneSpecification[]|null  $docTabZoneSpecifications  Indicate the doc tab specifications for the individual doc tab zone on the label.
     */
    public function __construct(
        public readonly ?array $docTabZoneSpecifications = null,
    ) {
    }
}
