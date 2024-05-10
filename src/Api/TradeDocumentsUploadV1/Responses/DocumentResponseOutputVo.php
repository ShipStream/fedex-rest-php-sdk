<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses;

use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\DocumentUploadServiceOutputVo;
use ShipStream\FedEx\Response;

final class DocumentResponseOutputVo extends Response
{
    /**
     * @param  ?DocumentUploadServiceOutputVo  $output  This is the output received for a document upload request.
     * @param  ?string  $customerTransactionId  This element has a unique identifier added in your request, helps you match the request to the reply. <br> Example:XXXX_XXX123XXXXX
     */
    public function __construct(
        public readonly ?DocumentUploadServiceOutputVo $output = null,
        public readonly ?string $customerTransactionId = null,
    ) {
    }
}
