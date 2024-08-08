<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class MultiMetaDataPreResponse extends Dto
{
    /**
     * @param  ?string  $formCode  Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible.
     * @param  ?string  $documentType  Indicates the type of document uploaded. <br><br> Example:CO<br>Following are the values returned depending on the document type<ul><li>CERTIFICATE_OF_ORIGIN – CO</li><li>COMMERCIAL_INVOICE –  CI</li><li>ETD_LABEL –  AWB</li><li>USMCA_CERTIFICATE_OF_ORIGIN –  CO</li><li>USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN –  CI</li><li>OTHER –  OTHER</li><li>PRO_FORMA_INVOICE –  PRO</li></ul>
     * @param  ?string  $docId  This is the document id or the upload reference. Note this and use this in your shipment if you have uploaded the document prior to shipment request.<br> Example: 090493e181586308
     * @param  ?string[]  $folderId  This is the reference server folder id, where the document is uploaded. Note that, this data is returned only for Post-Shipment Upload scenario
     */
    public function __construct(
        public readonly ?string $formCode = null,
        public readonly ?string $documentType = null,
        public readonly ?string $docId = null,
        public readonly ?array $folderId = null,
    ) {
    }
}