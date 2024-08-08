<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ConsolidationV1\Dto\FullSchemaCreateConsolidationShipment;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\CreateConsolidationShipmentResponse;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Request;

/**
 * Create Consolidation Shipment
 *
 * Create Consolidation Shipment service would help the customer to create a shipment and confirm it
 * with the required shipping information.
 */
class CreateConsolidationShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaCreateConsolidationShipment  $fullSchemaCreateConsolidationShipment  The request elements required to create a consolidation shipment.
     */
    public function __construct(
        public FullSchemaCreateConsolidationShipment $fullSchemaCreateConsolidationShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/consolidations/shipments';
    }

    public function createDtoFromResponse(
        Response $response,
    ): CreateConsolidationShipmentResponse|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CreateConsolidationShipmentResponse::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCreateConsolidationShipment->toArray();
    }
}
