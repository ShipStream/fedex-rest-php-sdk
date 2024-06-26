<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedEtdDetail extends Dto
{
    protected static array $complexArrayTypes = ['uploadDocumentReferenceDetails' => [UploadDocumentReferenceDetail::class]];

    /**
     * @param  ?string  $folderId  Returns the folder id where the documents is uploaded <br> Example: "0b0493e580dc1a1b"
     * @param  ?string  $type  Returns the type of the document that is being uploaded <br> Example: "COMMERCIAL_INVOICE"
     * @param  UploadDocumentReferenceDetail[]|null  $uploadDocumentReferenceDetails  Specify the document upload reference details.
     */
    public function __construct(
        public readonly ?string $folderId = null,
        public readonly ?string $type = null,
        public readonly ?array $uploadDocumentReferenceDetails = null,
    ) {
    }
}
