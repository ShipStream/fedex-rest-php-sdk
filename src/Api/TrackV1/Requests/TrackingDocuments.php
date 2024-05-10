<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaSpod;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Api\TrackV1\Responses\TrkcResponseVoSpod;
use ShipStream\FedEx\Request;

/**
 * TrackingDocuments
 *
 * This endpoint helps you to request a letter that includes the recipient's signature as a proof of
 * delivery.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class TrackingDocuments extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaSpod $fullSchemaSpod,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/track/v1/trackingdocuments';
    }

    public function createDtoFromResponse(
        Response $response,
    ): TrkcResponseVoSpod|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TrkcResponseVoSpod::class,
            400 => ErrorResponseVo::class,
            401 => ErrorResponseVo401::class,
            403 => ErrorResponseVo403::class,
            404 => ErrorResponseVo404::class,
            500 => ErrorResponseVo500::class,
            503 => ErrorResponseVo503::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaSpod->toArray();
    }
}
