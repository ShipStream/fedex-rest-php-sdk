<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Requests\Api;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request as Request1;
use Saloon\Http\Response;
use ShipStream\FedEx\PickupRequestV1\Dto\FullSchemaCancelPickup;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo401;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo403;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo404;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo500;
use ShipStream\FedEx\PickupRequestV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\PickupRequestV1\Responses\PudcResponseVoCancelPickup;
use ShipStream\FedEx\Request;

/**
 * Cancel Pickup
 *
 * Use this endpoint to cancel the already scheduled pickup request. <br>Note: A failure notification
 * will be sent if you attempt to cancel a pickup after the FedEx courier has been dispatched to the
 * pickup location.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class CancelPickup extends Request
{
	protected Method $method = Method::PUT;


	/**
	 * @param FullSchemaCancelPickup $fullSchemaCancelPickup This is a placeholder for cancelled pickup request elements.
	 */
	public function __construct(
		public FullSchemaCancelPickup $fullSchemaCancelPickup,
	) {
	}


	public function resolveEndpoint(): string
	{
		return "/pickup/v1/pickups/cancel";
	}


	public function createDtoFromResponse(
		Response $response,
	): PudcResponseVoCancelPickup|ErrorResponseVo2|ErrorResponseVo401|ErrorResponseVo403|ErrorResponseVo404|ErrorResponseVo500|ErrorResponseVo503
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    200 => PudcResponseVoCancelPickup::class,
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
		return $this->fullSchemaCancelPickup->toArray();
	}
}
