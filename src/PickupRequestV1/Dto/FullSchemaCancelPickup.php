<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaCancelPickup extends Dto
{
	/**
	 * @param AccountNumber $associatedAccountNumber This is the FedEx account number. <br>Example: Your account number
	 * @param string $pickupConfirmationCode The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: 7
	 * @param string $scheduledDate Indicates the date the pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
	 * @param ?string $remarks Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
	 * @param ?string $carrierCode This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. Required for FedEx Ground.<br> Optional for FedEx Express.<br> The Default is FedEx Express i.e. FDXE.
	 * @param ?string $accountAddressOfRecord Address details for the associated pickup account. Indicates if the address is residential. Specifies the city name, country code, streetline number, postal code, address verification Identifier, and state or province code.
	 * @param ?string $location The FedEx Express location identifier responsible for processing the pickup request. This is returned in the CreatePickup response and is required to cancel a FedEx Express dispatch.Required only for FedEx Express Pickups. Optional for FedEx Ground. Example: LOSA
	 */
	public function __construct(
		public readonly AccountNumber $associatedAccountNumber,
		public readonly string $pickupConfirmationCode,
		public readonly string $scheduledDate,
		public readonly ?string $remarks = null,
		public readonly ?string $carrierCode = null,
		public readonly ?string $accountAddressOfRecord = null,
		public readonly ?string $location = null,
	) {
	}
}
