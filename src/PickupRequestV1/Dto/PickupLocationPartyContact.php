<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupLocationPartyContact extends Dto
{
	/**
	 * @param ?string $companyName
	 * @param ?string $personName
	 * @param ?string $phoneNumber
	 */
	public function __construct(
		public readonly ?string $companyName = null,
		public readonly ?string $personName = null,
		public readonly ?string $phoneNumber = null,
	) {
	}
}
