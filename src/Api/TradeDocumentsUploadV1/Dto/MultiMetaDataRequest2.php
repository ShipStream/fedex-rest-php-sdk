<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class MultiMetaDataRequest2 extends Dto
{
    /**
     * @param  string  $contentType  Specify media type(MIME) of file. <br> Example : text/plain <br><a onclick='loadDocReference("contenttypes")'> Click here for available Content Types</a>
     * @param  string  $shipDocumentType  Provide the type of document to be uploaded. <br><br>For more information on the individual documents, visit Overview section <b>Upload Documents</b> on this page.
     * @param  string  $fileContentBase64  Provide the bycode content for base64 file upload
     * @param  ?string  $fileReferenceId  Specify the unique reference bytecode to the file. <br> Example : inv_file1_ctx_02132021_5
     * @param  ?string  $formCode  Specify the form code. This value is required for the shipments travelling between the 3 countries US, CA & MX and when the shipment is USMCA eligible. <br> Note: if shipDocumentType value provided is either USMCA_CERTIFICATION_OF_ORIGIN or USMCA_COMMERCIAL_INVOICE_CERTIFICATION_OF_ORIGIN, then it is REQUIRED to pass value as USMCA
     * @param  ?string  $originLocationCode  Provide origin FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     * @param  ?string  $destinationLocationCode  Provide destination FedEx location code for the shipment. This is only required for Post Shipment document upload. This value is present in Create Shipment response.
     */
    public function __construct(
        public string $contentType,
        public string $shipDocumentType,
        public string $fileContentBase64,
        public ?string $fileReferenceId = null,
        public ?string $formCode = null,
        public ?string $originLocationCode = null,
        public ?string $destinationLocationCode = null,
    ) {}
}
