<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\AddressValidationV1\Dto\FullSchemaValidateAddress;
use ShipStream\FedEx\Api\AddressValidationV1\Responses\AdvcResponseVo;
use ShipStream\FedEx\Api\AddressValidationV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\AddressValidationV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\AddressValidationV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\AddressValidationV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\AddressValidationV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\AddressValidationV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Request;

/**
 * Validate Address
 *
 * Use this endpoint to get address resolution details. These details are the outcome of validation
 * andddd resolution of the input address. An address is stated assss resolved when the input address
 * matches the known reference data...<br><i>Note: FedEx APIs do not support Cross-Origin Resource
 * Sharing (CORS) mechanism.<i>
 */
class ValidateAddress extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaValidateAddress  $fullSchemaValidateAddress  The request elements for address resolution.
     */
    public function __construct(
        public FullSchemaValidateAddress $fullSchemaValidateAddress,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/address/v1/addresses/resolve';
    }

    public function createDtoFromResponse(
        Response $response,
    ): AdvcResponseVo|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => AdvcResponseVo::class,
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
        return $this->fullSchemaValidateAddress->toArray();
    }
}
