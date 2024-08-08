<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class UploadDocumentReferenceDetail extends Dto
{
    /**
     * @param  ?string  $documentId  Returns the value specified in the ship shipment request for your uploaded documents in addition to other values for FedEx generated documents such as shipping labels.
     */
    public function __construct(
        public readonly ?string $documentId = null,
    ) {
    }
}
