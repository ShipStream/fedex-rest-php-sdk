<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPickupPackageDetail extends Dto
{
	/**
	 * @param ?PackageSpecialServices $packageSpecialServices Indicates the special services associated with this package.
	 */
	public function __construct(
		public readonly ?PackageSpecialServices $packageSpecialServices = null,
	) {
	}
}
