<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentRequirementsDetail extends Dto
{
    protected static array $complexArrayTypes = ['generationDetails' => [DocumentGenerationDetail::class]];

    /**
     * @param  ?string[]  $requiredDocuments  Indicates the required documents information.<br>Example: ["COMMERCIAL_OR_PRO_FORMA_INVOICE","AIR_WAYBILL"]
     * @param  ?string[]  $prohibitedDocuments  Indicates the prohibited Documents info.<br>Example: ["CERTIFICATE_OF_ORIGIN "]
     * @param  DocumentGenerationDetail[]|null  $generationDetails  Specifies the generation details.
     */
    public function __construct(
        public readonly ?array $requiredDocuments = null,
        public readonly ?array $prohibitedDocuments = null,
        public readonly ?array $generationDetails = null,
    ) {
    }
}
