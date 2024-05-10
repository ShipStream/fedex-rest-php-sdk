<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PostalCodeValidationV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Dto\FullSchemaValidatePostal;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Responses\CountryCxsResponseVo;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Request;

/**
 * Validate Postal
 *
 * Use this endpoint to validate postal codes and service commitments. Supports city, postal, country
 * and origin-destination related lookups and validations.<br><i>Note: FedEx APIs do not support
 * Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class ValidatePostal extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaValidatePostal  $fullSchemaValidatePostal  The request elements for validating a postal code.
     */
    public function __construct(
        public FullSchemaValidatePostal $fullSchemaValidatePostal,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/country/v1/postal/validate';
    }

    public function createDtoFromResponse(
        Response $response,
    ): CountryCxsResponseVo|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CountryCxsResponseVo::class,
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
        return $this->fullSchemaValidatePostal->toArray();
    }
}
