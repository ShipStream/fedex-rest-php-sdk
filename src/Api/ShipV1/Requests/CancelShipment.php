<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaCancelShipment;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4012;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4032;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4042;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo5002;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo5032;
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
    ): ShpcResponseVoCancelShipment|ErrorResponseVo2|ErrorResponseVo4012|ErrorResponseVo4032|ErrorResponseVo4042|ErrorResponseVo5002|ErrorResponseVo5032 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoCancelShipment::class,
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
        return $this->fullSchemaCancelShipment->toArray();
    }
}
