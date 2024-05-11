<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RecommendedDocumentSpecification extends Dto
{
    /**
     * @param  string[]  $types  This is the recommended document Type.<br><a onclick='loadDocReference("shipmentdocumenttype")'>click here to see shipment document type</a>
     */
    public function __construct(
        public readonly array $types,
    ) {
    }
}
