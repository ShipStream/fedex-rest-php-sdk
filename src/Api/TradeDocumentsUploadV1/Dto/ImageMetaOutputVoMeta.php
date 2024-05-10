<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class ImageMetaOutputVoMeta extends Dto
{
    /**
     * @param  ?string  $imageType  Returns the path which is specified in the request. <br>Example: SIGNATURE
     * @param  ?string  $imageIndex  Returns the image index that is specified in the request.<br>            Example: IMAGE_1
     */
    public function __construct(
        public readonly ?string $imageType = null,
        public readonly ?string $imageIndex = null,
    ) {
    }
}
