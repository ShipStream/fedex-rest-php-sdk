<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\GlobalTradeV1\Dto\FullSchema;
use ShipStream\FedEx\Api\GlobalTradeV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\GlobalTradeV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\GlobalTradeV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\GlobalTradeV1\Responses\ErrorResponseVo422;
use ShipStream\FedEx\Api\GlobalTradeV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\GlobalTradeV1\Responses\GticResponseVo;
use ShipStream\FedEx\Request;

/**
 * shipmentRegulatoryDetails
 *
 * Use this endpoint to retrieve regulatory document and advisories for your shipment.<br><i>Note:
 * FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class ShipmentRegulatoryDetails extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchema  $fullSchema  The request elements to retrieve Shipment Regulatory Details.
     */
    public function __construct(
        public FullSchema $fullSchema,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/globaltrade/v1/shipments/regulatorydetails/retrieve';
    }

    public function createDtoFromResponse(
        Response $response,
    ): GticResponseVo|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo404|ErrorResponseVo422|ErrorResponseVo500 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GticResponseVo::class,
            400 => ErrorResponseVo::class,
            401 => ErrorResponseVo401::class,
            404 => ErrorResponseVo404::class,
            422 => ErrorResponseVo422::class,
            500 => ErrorResponseVo500::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchema->toArray();
    }
}
