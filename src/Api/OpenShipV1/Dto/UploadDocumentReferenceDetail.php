<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class UploadDocumentReferenceDetail extends Dto
{
    /**
     * @param  ?string  $documentType  This is the uploaded document type.
     * @param  ?string  $documentReference  Specify the reference for the uploaded document.<br>Example: Reference
     * @param  ?string  $description  This is the document description of the attached document.<br>Example: PRO FORMA INVOICE
     * @param  ?string  $documentId  This is the uploaded document ID value.<br>Example: 090927d680038c61
     */
    public function __construct(
        public readonly ?string $documentType = null,
        public readonly ?string $documentReference = null,
        public readonly ?string $description = null,
        public readonly ?string $documentId = null,
    ) {
    }
}
