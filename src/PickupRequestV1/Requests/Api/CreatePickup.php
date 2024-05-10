<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Requests\Api;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request as Request1;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\PickupRequestV1\Dto\FullSchemaCreatePickup;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\PickupRequestV1\Responses\PudcResponseVoCreatePickup;
use ShipStream\FedEx\Request;

/**
 * Create Pickup
 *
 * Use this endpoint to create a pickup request for a package.<br><i>Note: FedEx APIs do not support
 * Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CreatePickup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	/**
	 * @param FullSchemaCreatePickup $fullSchemaCreatePickup Use this endpoint to create a pickup request.
	 */
	public function __construct(
		public FullSchemaCreatePickup $fullSchemaCreatePickup,
	) {
	}


	public function resolveEndpoint(): string
	{
		return "/pickup/v1/pickups";
	}


	public function createDtoFromResponse(
		Response $response,
	): PudcResponseVoCreatePickup|ErrorResponseVo|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    200 => PudcResponseVoCreatePickup::class,
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
		return $this->fullSchemaCreatePickup->toArray();
	}
}
