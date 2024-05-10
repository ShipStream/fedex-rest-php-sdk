<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentMetaOutput extends Dto
{
    /**
     * @param  ?string  $documentType  Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>
     * @param  ?string  $docId  This is the document id or the upload reference. Use this docId in your shipment, if you have uploaded the document prior to shipment request.<br>For MPS, this docId must be used for all the packages in the shipment.<br>Example: 090493e181586308<br><i>Note:</i><ul><li><i>For MPS post the shipment request, use the master shipment tracking number when uploading the documents. </i></li></ul>
     * @param  ?string[]  $folderId  This is the reference server folder id, where the document is uploaded. Note that, for a Pre-Shipment Upload scenario, this field will return a pseudo data.
     */
    public function __construct(
        public readonly ?string $documentType = null,
        public readonly ?string $docId = null,
        public readonly ?array $folderId = null,
    ) {
    }
}
