<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaCancelShipment;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ShipV1\Responses\ShpcResponseVoCancelShipment;
use ShipStream\FedEx\Request;

/**
 * Cancel Shipment
 *
 * Use this endpoint to cancel FedEx Express and Ground shipments that have not already been tendered
 * to FedEx. This request will cancel all packages within the shipment.<br><i>Note: FedEx APIs do not
 * support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CancelShipment extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  FullSchemaCancelShipment  $fullSchemaCancelShipment  The request elements required to cancel a shipment.
     */
    public function __construct(
        public FullSchemaCancelShipment $fullSchemaCancelShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/shipments/cancel';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoCancelShipment|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoCancelShipment::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCancelShipment->toArray();
    }
}
