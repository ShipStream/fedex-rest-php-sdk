<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaModifyPackageInOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoModifyPackageInOpenShipment;
use ShipStream\FedEx\Request;

/**
 * Modify Open Shipment Packages
 *
 * This endpoint helps you to modify packages in Open Shipment request with the required shipping
 * information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin
 * Resource Sharing (CORS) mechanism.</i>
 */
class ModifyOpenShipmentPackages extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  FullSchemaModifyPackageInOpenShipment  $fullSchemaModifyPackageInOpenShipment  The response elements received when a shipment is created.
     */
    public function __construct(
        public FullSchemaModifyPackageInOpenShipment $fullSchemaModifyPackageInOpenShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/packages';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoModifyPackageInOpenShipment|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoModifyPackageInOpenShipment::class,
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
        return $this->fullSchemaModifyPackageInOpenShipment->toArray();
    }
}
