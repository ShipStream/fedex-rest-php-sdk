<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class EtdUploadRequest extends Dto
{
    /**
     * @param  string  $workflowName  Indicate if this document is being uploaded for Pre-Shipment or Post-shipment.
     * @param  string  $name  Specify the file name of the document to be uploaded.<br><br>Example: COO.PDF
     * @param  string  $contentType  Specify the file type or content type of the document to be uploaded.<br><a onclick='loadDocReference("contenttypes")'> Click here for available Content Types</a>
     * @param  MetaObject  $meta  Indicate the shipment metadata associated with the document to be uploaded.
     * @param  ?string  $carrierCode  Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     */
    public function __construct(
        public readonly string $workflowName,
        public readonly string $name,
        public readonly string $contentType,
        public readonly MetaObject $meta,
        public readonly ?string $carrierCode = null,
    ) {
    }
}
