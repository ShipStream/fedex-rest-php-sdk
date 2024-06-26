<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class ImageMetaOutputVo extends Dto
{
    /**
     * @param  ?ImageMetaOutputVoMeta  $meta  This object specifies the meta data such as image type, path and index for the uploaded image file.
     * @param  ?string  $status  Returns the high-level results for the document upload.<br>Valid values:<ul><li> SUCCESS</li><li>FAILURE</li><li>ERROR</li></ul>
     * @param  ?string  $documentReferenceId  Returns the document reference ID associated with the request.
     */
    public function __construct(
        public readonly ?ImageMetaOutputVoMeta $meta = null,
        public readonly ?string $status = null,
        public readonly ?string $documentReferenceId = null,
    ) {
    }
}
