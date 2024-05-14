<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaFreightPickupAvailability;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\PudcResponseVoPickupAvailaibility;
use ShipStream\FedEx\Request;

/**
 * Check Freight Pickup Availability
 *
 * This endpoint allows you to check the availability of an Freight LTL pickup service. The pickup
 * availability depends on two factors, the cut off time and the access time.<br/><br/>**Cut off time**
 * - The latest time allowed for a pickup to be scheduled. The time is local to the pickup postal
 * code.<br/><br/>**Access time** - The time between the pickup ready time (when the package is ready
 * to be picked) and the time when the driver is ready to pick up the package.<br/><br/><i>Note: FedEx
 * APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CheckFreightPickupAvailability extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaFreightPickupAvailability  $fullSchemaFreightPickupAvailability  These are pickup availability request elements.
     */
    public function __construct(
        public FullSchemaFreightPickupAvailability $fullSchemaFreightPickupAvailability,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/pickup/v1/freight/pickups/availabilities';
    }

    public function createDtoFromResponse(
        Response $response,
    ): PudcResponseVoPickupAvailaibility|ErrorResponseVo|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PudcResponseVoPickupAvailaibility::class,
            400, 401, 403, 404, 500 => ErrorResponseVo::class,
            503 => ErrorResponseVo503::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaFreightPickupAvailability->toArray();
    }
}
