<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaRetrieveOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoRetrieveOpenShipment;
use ShipStream\FedEx\Request;

/**
 * Retrieve Open Shipment
 *
 * This endpoint helps the user to RETRIEVE the entire shipment request details of the OpenShipment
 * that is created.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class RetrieveOpenShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaRetrieveOpenShipment $fullSchemaRetrieveOpenShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/retrieve';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoRetrieveOpenShipment|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoRetrieveOpenShipment::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaRetrieveOpenShipment->toArray();
    }
}
