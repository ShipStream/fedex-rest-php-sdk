<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RecommendedDocumentSpecification extends Dto
{
    /**
     * @param  ?string[]  $types  This is a document type.
     */
    public function __construct(
        public readonly ?array $types = null,
    ) {
    }
}
