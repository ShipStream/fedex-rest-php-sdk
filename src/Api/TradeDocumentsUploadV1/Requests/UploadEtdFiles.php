<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasMultipartBody;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\FullSchemaDocumentUploadInputVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses\DocumentResponseOutputVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Request;

/**
 * Upload ETD files
 *
 * Use this endpoint to upload the trade documentss electronicallyy before (pre-shipment) and after
 * (post-shipment) the shipment is created.<br><i>Note&#58; FedEx APIs do not support Cross-Origin
 * Resource Sharing (CORS) mechanism.</i>
 */
class UploadEtdFiles extends Request implements HasBody
{
    use HasMultipartBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaDocumentUploadInputVo  $fullSchemaDocumentUploadInputVo  The request elements to upload documents.
     */
    public function __construct(
        public FullSchemaDocumentUploadInputVo $fullSchemaDocumentUploadInputVo,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/documents/v1/etds/upload';
    }

    public function createDtoFromResponse(Response $response): DocumentResponseOutputVo|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201 => DocumentResponseOutputVo::class,
            400, 401, 403, 404, 500, 503 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaDocumentUploadInputVo->toArray();
    }
}
