<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ShipV1\Dto\FullSchemaCreateTag;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ShipV1\Responses\ShpcResponseVoCreateTag;
use ShipStream\FedEx\Request;

/**
 * Create Tag
 *
 * FedEx creates and delivers a returnnn shipping label to your customer and collects the item for
 * return. Your customer needs to have the package ready for pickup when the FedEx driver arrives. Use
 * this endpoint to create tag requests for FedEx Express and FedEx Ground shipments.<br><i>Note: FedEx
 * APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CreateTag extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaCreateTag $fullSchemaCreateTag,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/ship/v1/shipments/tag';
    }

    public function createDtoFromResponse(Response $response): ShpcResponseVoCreateTag|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoCreateTag::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCreateTag->toArray();
    }
}
