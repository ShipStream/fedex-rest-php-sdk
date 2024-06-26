<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class Document extends Dto
{
    /**
     * @param  string  $referenceId  Specify reference ID for the image to be uploaded.<br><br> Example: SIGNA202103
     * @param  string  $name  Specify file name to be uploaded.<br><br>Example: Signature.PNG
     * @param  string  $contentType  Specify the file type or image type of the to be uploaded.<br><br>Valid Values are: <ul><li>image/png</li><li>image/gif</li></ul>
     * @param  DocumentRules  $rules  Specify the rules.
     * @param  DocumentMeta  $meta  Use this object to specify image meta data such as image type, path and index for the file to be uploaded.
     */
    public function __construct(
        public readonly string $referenceId,
        public readonly string $name,
        public readonly string $contentType,
        public readonly DocumentRules $rules,
        public readonly DocumentMeta $meta,
    ) {
    }
}
