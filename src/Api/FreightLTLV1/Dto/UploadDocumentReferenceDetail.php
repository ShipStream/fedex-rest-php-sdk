<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class UploadDocumentReferenceDetail extends Dto
{
    /**
     * @param  ?string  $documentType  Specify document type for the uploaded document. It should match with the type of uploaded document associated with documentId.
     * @param  ?string  $documentReference  Specify the reference for the uploaded document.This is for the customer to reference their uploaded docs when they retrieve them. Could be anything, order number, po number, whatever the customer used to tie the document to something they would use.<br>Note: Ensure to supply document references in case of  Pre-Shipment document upload.</br><br>Example: Reference
     * @param  ?string  $description  Specify additional information about the uploaded document for better understanding.<br>Example: Certificate of Origin is uploaded for country of manufacturing verification.
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
