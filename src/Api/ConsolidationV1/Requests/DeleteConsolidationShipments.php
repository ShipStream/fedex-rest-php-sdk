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
use ShipStream\FedEx\Api\ConsolidationV1\Dto\FullSchemaDeleteShipment;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ShpcResponseVo;
use ShipStream\FedEx\Request;

/**
 * Delete Consolidation Shipments
 *
 * Use this endpoint to delete the Express or Ground consolidations shipments that have not been
 * tendered to FedEx. The request would cancel one/all packages within the shipment.
 */
class DeleteConsolidationShipments extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  FullSchemaDeleteShipment  $fullSchemaDeleteShipment  The request elements required to cancel a shipment.
     */
    public function __construct(
        public FullSchemaDeleteShipment $fullSchemaDeleteShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/consolidations/shipments/delete';
    }

    public function createDtoFromResponse(Response $response): ShpcResponseVo|ErrorResponseVo2|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVo::class,
            400, 401, 403, 500 => ErrorResponseVo2::class,
            404 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaDeleteShipment->toArray();
    }
}
