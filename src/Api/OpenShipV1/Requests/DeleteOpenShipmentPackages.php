<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaDeletePackagesFromOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoDeletePackages;
use ShipStream\FedEx\Request;

/**
 * Delete Open Shipment Packages
 *
 * This endpoint helps you to delete packages from Open Shipment request with the required shipping
 * information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin
 * Resource Sharing (CORS) mechanism.</i>
 */
class DeleteOpenShipmentPackages extends Request
{
    protected Method $method = Method::PUT;

    public function __construct(
        public FullSchemaDeletePackagesFromOpenShipment $fullSchemaDeletePackagesFromOpenShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/packages/delete';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoDeletePackages|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoDeletePackages::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaDeletePackagesFromOpenShipment->toArray();
    }
}
