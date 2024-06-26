<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class AvailableImagesDetail extends Dto
{
    /**
     * @param  ?string  $size  Field which holds the size of available images for the shipment being tracked. Example: LARGE
     * @param  ?string  $type  Field which holds the type of available images for the shipment being tracked.<br> Example: BILL_OF_LADING
     */
    public function __construct(
        public readonly ?string $size = null,
        public readonly ?string $type = null,
    ) {
    }
}
