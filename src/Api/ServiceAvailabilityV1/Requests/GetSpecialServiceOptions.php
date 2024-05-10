<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\FullSchemaSpecialServiceOptions;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\AvailabilitycxsResponseVo;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Request;

/**
 * Get Special Service Options
 *
 * Use this endpoint to request list of all available FedEx services, shipment special, service options
 * along with delivery signature options and return shipment types that are available between an origin
 * and destination. You can filter the results using FedEx carrier code(s) and/or service type(s) for
 * specific services.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class GetSpecialServiceOptions extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaSpecialServiceOptions  $fullSchemaSpecialServiceOptions  The request elements for special service options availability.
     */
    public function __construct(
        public FullSchemaSpecialServiceOptions $fullSchemaSpecialServiceOptions,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/availability/v1/specialserviceoptions';
    }

    public function createDtoFromResponse(
        Response $response,
    ): AvailabilitycxsResponseVo|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => AvailabilitycxsResponseVo::class,
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
        return $this->fullSchemaSpecialServiceOptions->toArray();
    }
}
