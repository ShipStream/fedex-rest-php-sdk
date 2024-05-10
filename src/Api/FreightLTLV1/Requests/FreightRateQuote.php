<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchema;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\RatcResponseVo;
use ShipStream\FedEx\Request;

/**
 * Freight RateQuote
 *
 * This endpoint provides the abilityy to retrieve rateee quotes and optional transit information...
 * The rate is calculated based on the origin and destination of the shipment. Additional information
 * such as carrier code, service type, or service option can be used to filter the results. Applicable
 * operating company is FedEx Freight.<br><i>Note: FedEx APIs do not support Cross-Origin Resource
 * Sharing (CORS) mechanism...</i>
 */
class FreightRateQuote extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchema  $fullSchema  The request elements for requesting a freight rate quote.
     */
    public function __construct(
        public FullSchema $fullSchema,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/rate/v1/freight/rates/quotes';
    }

    public function createDtoFromResponse(Response $response): RatcResponseVo|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => RatcResponseVo::class,
            400, 401, 403, 404, 500, 503 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchema->toArray();
    }
}
