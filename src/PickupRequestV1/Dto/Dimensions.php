<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class Dimensions extends Dto
{
	/**
	 * @param ?int $length Indicate the length of the package. No implied decimal places. Maximum value is 999.<br>
	 *  Example: 20
	 * @param ?int $width Indicate the width of the package. No implied decimal places. Maximum value is 999.<br>
	 *  Example: 15
	 * @param ?string $units Specify the unit of measurement used for the package dimensions.
	 * @param ?int $height Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 12
	 */
	public function __construct(
		public readonly ?int $length = null,
		public readonly ?int $width = null,
		public readonly ?string $units = null,
		public readonly ?int $height = null,
	) {
	}
}
