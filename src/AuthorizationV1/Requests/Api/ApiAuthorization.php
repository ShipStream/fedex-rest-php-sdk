<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AuthorizationV1\Requests\Api;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response as Response1;
use Saloon\Traits\Body\HasFormBody;
use ShipStream\FedEx\AuthorizationV1\Dto\FullSchema;
use ShipStream\FedEx\AuthorizationV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\AuthorizationV1\Responses\Response;
use ShipStream\FedEx\Request;

/**
 * API Authorization
 *
 * Use this endpoint to request the OAuth token (bearer token) to authorize your application to access
 * FedEx resources. You can pass this bearer token in your subsequent individual FedEx API endpoint
 * requests.<br/><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class ApiAuthorization extends Request implements HasBody
{
    use HasFormBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchema  $fullSchema  The request elements for OAuth API.
     */
    public function __construct(
        public FullSchema $fullSchema,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/oauth/token';
    }

    public function createDtoFromResponse(Response1 $response): Response|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => Response::class,
            401, 500, 503 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchema->toArray();
    }
}
