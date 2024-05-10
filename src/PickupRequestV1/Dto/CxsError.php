<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
	protected static array $complexArrayTypes = ['parameterList' => [Parameter::class]];


	/**
	 * @param ?string $code Indicates the error code.<br>Example: PICKUP.REQUESTED.PREVIOUS.DAY
	 * @param Parameter[]|null $parameterList
	 * @param ?string $message Indicates the description of API error alert message.<br>Example: Cannot schedule a pickup requested for a previous day.
	 */
	public function __construct(
		public readonly ?string $code = null,
		public readonly ?array $parameterList = null,
		public readonly ?string $message = null,
	) {
	}
}
