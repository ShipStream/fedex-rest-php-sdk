<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaCancelTag;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4012;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4032;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo4042;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo5002;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo5032;
use ShipStream\FedEx\Api\ShipV1\Responses\ShpcResponseVo;
use ShipStream\FedEx\Request;

/**
 * CancelTag
 *
 * This endpoint cancels a FedEx Return Tag and the associated pickup for FedEx Express and FedEx
 * Ground shipments if the shipment has not yet been picked up by the courier.<br><i>Note: FedEx APIs
 * do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CancelTag extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  FullSchemaCancelTag  $fullSchemaCancelTag  The input details required to cancel a tag.
     */
    public function __construct(
        protected string $shipmentid,
        public FullSchemaCancelTag $fullSchemaCancelTag,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/ship/v1/shipments/tag/cancel/{$this->shipmentid}";
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVo|ErrorResponseVo2|ErrorResponseVo4012|ErrorResponseVo4032|ErrorResponseVo4042|ErrorResponseVo5002|ErrorResponseVo5032 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVo::class,
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
        return $this->fullSchemaCancelTag->toArray();
    }
}
