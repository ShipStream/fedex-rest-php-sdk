<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaTrackingReferences;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Api\TrackV1\Responses\TrkcResponseVoReferenceNumber;
use ShipStream\FedEx\Request;

/**
 * Track by References
 *
 * This endpoint returns tracking information based on alternate references other than Tracking Number
 * such as Customer reference numbers, etc.<br><i>Note: FedEx APIs do not support Cross-Origin Resource
 * Sharing (CORS) mechanism.</i>
 */
class TrackByReferences extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaTrackingReferences  $fullSchemaTrackingReferences  Specifies the request elements for Track by alternate reference.<br> For a valid request there are two combinations:<br> 1.) A referenceValue and accountNumber is required OR <br>2.) referenceType & carrierCode, shipdateBegin and shipDateEnd, destinationPostalCode and destinationCountryCode are required.
     */
    public function __construct(
        public FullSchemaTrackingReferences $fullSchemaTrackingReferences,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/track/v1/referencenumbers';
    }

    public function createDtoFromResponse(
        Response $response,
    ): TrkcResponseVoReferenceNumber|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TrkcResponseVoReferenceNumber::class,
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
        return $this->fullSchemaTrackingReferences->toArray();
    }
}
