<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaGetConfirmedShipmentAsyncResults;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4012;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4032;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4042;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo5002;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo5032;
use ShipStream\FedEx\Api\ShipV1\Responses\ShpcResponseVoGetOpenShipmentResults;
use ShipStream\FedEx\Request;

/**
 * Get Confirmed Shipment Async Results
 *
 * This endpoint helps you to process confirmed shipments asynchronously (above 40 packages) and
 * produce results based on job id.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing
 * (CORS) mechanism.</i>
 */
class GetConfirmedShipmentAsyncResults extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaGetConfirmedShipmentAsyncResults $fullSchemaGetConfirmedShipmentAsyncResults,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/shipments/results';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoGetOpenShipmentResults|ErrorResponseVo2|ErrorResponseVo4012|ErrorResponseVo4032|ErrorResponseVo4042|ErrorResponseVo5002|ErrorResponseVo5032 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoGetOpenShipmentResults::class,
            400 => ErrorResponseVo2::class,
            401 => ErrorResponseVo4012::class,
            403 => ErrorResponseVo4032::class,
            404 => ErrorResponseVo4042::class,
            500 => ErrorResponseVo5002::class,
            503 => ErrorResponseVo5032::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaGetConfirmedShipmentAsyncResults->toArray();
    }
}
