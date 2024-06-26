<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaModifyOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoModifyOpenShipment;
use ShipStream\FedEx\Request;

/**
 * Modify Open Shipment
 *
 * This endpoint helps you to modify an Open shipment request with the required shipping information
 * before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin Resource
 * Sharing (CORS) mechanism.</i>
 */
class ModifyOpenShipment extends Request
{
    protected Method $method = Method::PUT;

    public function __construct(
        public FullSchemaModifyOpenShipment $fullSchemaModifyOpenShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoModifyOpenShipment|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoModifyOpenShipment::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaModifyOpenShipment->toArray();
    }
}
