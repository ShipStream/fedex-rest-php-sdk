<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses;

use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\ImageMetaOutputVo;
use ShipStream\FedEx\Response;

final class ImageUploadServiceOutputVo extends Response
{
    /**
     * @param  ?ImageMetaOutputVo  $output
     * @param  ?string  $customerTransactionId  This element has a unique identifier added in your request, helps you match the request to the reply. <br> Example:XXXX_XXX123XXXXX
     */
    public function __construct(
        public readonly ?ImageMetaOutputVo $output = null,
        public readonly ?string $customerTransactionId = null,
    ) {
    }
}
