<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\FullSchemaPackageAndServiceOptions;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\CmdcResponseVo;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Request;

/**
 * Get Package and Service Options
 *
 * Use this endpoint to return a list of all FedEx Express or FedEx Ground services and packaging type
 * combinations that are available between the input origin and destination and subpackaging
 * information.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class GetPackageAndServiceOptions extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaPackageAndServiceOptions  $fullSchemaPackageAndServiceOptions  These are the input elements for requesting package and service options.
     */
    public function __construct(
        public FullSchemaPackageAndServiceOptions $fullSchemaPackageAndServiceOptions,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/availability/v1/packageandserviceoptions';
    }

    public function createDtoFromResponse(
        Response $response,
    ): CmdcResponseVo|ErrorResponseVo2|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CmdcResponseVo::class,
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
        return $this->fullSchemaPackageAndServiceOptions->toArray();
    }
}
