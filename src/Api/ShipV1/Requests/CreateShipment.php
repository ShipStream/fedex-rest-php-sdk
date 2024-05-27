<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaShip;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ShipV1\Responses\ShpcResponseVoShipShipment;
use ShipStream\FedEx\Request;

/**
 * Create Shipment
 *
 * This endpoint helps you to create shipment requests therebyy validating all the shippingg input
 * information and either generates the labels (if the responses is synchronous) or a job ID if
 * transaction is processed using asynchronous method.<br><i>Note: FedEx APIs do not support
 * Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CreateShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaShip  $fullSchemaShip  The request elements required to create a shipment.
     */
    public function __construct(
        public FullSchemaShip $fullSchemaShip,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/shipments';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoShipShipment|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoShipShipment::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaShip->toArray();
    }
}
