<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaDocumentUploadInputVo extends Dto
{
    /**
     * @param  string  $attachment  Input the actual document/file to be uploaded.
     * @param  EtdUploadRequest  $document  Provide all the document details and shipment meta data.
     */
    public function __construct(
        public readonly string $attachment,
        public readonly EtdUploadRequest $document,
    ) {
    }
}
