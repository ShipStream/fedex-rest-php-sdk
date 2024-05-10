<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaImageUploadServiceInputVo extends Dto
{
    /**
     * @param  string  $attachment  Input the actual image file to be uploaded.
     * @param  Document  $document  Indicate the image reference metadata details.
     */
    public function __construct(
        public readonly string $attachment,
        public readonly Document $document,
    ) {
    }
}
