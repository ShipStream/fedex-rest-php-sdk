<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ExpressFreightDetail extends Dto
{
    /**
     * @param  ?string  $bookingConfirmationNumber  This is an advanced booking number that must be acquired through the appropriate channel in the shipment origin country. Without the booking number pickup and space allocation for the Express Freight shipment are not guaranteed. <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812
     * @param  ?int  $shippersLoadAndCount  Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example:  If a skid has 32 small boxes on it that are shrinkwrapped, the shippersLoadAndCount should be “32”
     * @param  ?bool  $packingListEnclosed  This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true
     */
    public function __construct(
        public readonly ?string $bookingConfirmationNumber = null,
        public readonly ?int $shippersLoadAndCount = null,
        public readonly ?bool $packingListEnclosed = null,
    ) {
    }
}
