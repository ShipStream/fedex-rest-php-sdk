<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\PickupRequestV1\Dto\FullSchemaPickupAvailability;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\PudcResponseVoPickupAvailability;
use ShipStream\FedEx\Request;

/**
 * Check Pickup Availability
 *
 * Use this endpoint to check the availability of a pickup service.<br><i>Note: FedEx APIs do not
 * support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CheckPickupAvailability extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaPickupAvailability  $fullSchemaPickupAvailability  These are pickup availability request elements.
     */
    public function __construct(
        public FullSchemaPickupAvailability $fullSchemaPickupAvailability,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/pickup/v1/pickups/availabilities';
    }

    public function createDtoFromResponse(
        Response $response,
    ): PudcResponseVoPickupAvailability|ErrorResponseVo2|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PudcResponseVoPickupAvailability::class,
            400 => ErrorResponseVo2::class,
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
        return $this->fullSchemaPickupAvailability->toArray();
    }
}
