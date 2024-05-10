<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupLocationPartyAddress extends Dto
{
	/**
	 * @param string[] $streetLines This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
	 * @param string $city
	 * @param string $stateOrProvinceCode
	 * @param string $postalCode
	 * @param string $countryCode
	 */
	public function __construct(
		public readonly array $streetLines,
		public readonly string $city,
		public readonly string $stateOrProvinceCode,
		public readonly string $postalCode,
		public readonly string $countryCode,
	) {
	}
}
