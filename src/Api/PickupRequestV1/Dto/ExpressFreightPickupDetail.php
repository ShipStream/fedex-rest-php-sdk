<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class ExpressFreightPickupDetail extends Dto
{
    /**
     * @param  ?string  $truckType  Specify type of pickup truck.
     * @param  ?string  $service  Specify FedEx Service for the shipment.<br>Example: FEDEX_1_DAY_FREIGHT
     * @param  ?string  $trailerLength  Specify the trailer size, required for dispatch.
     * @param  ?string  $bookingNumber  Specify a freight shipment booking number from FedEx. This number is mandatory for freight dispatch requests.<br> Example: 1234AGTT
     * @param  ?Dimensions  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     */
    public function __construct(
        public readonly ?string $truckType = null,
        public readonly ?string $service = null,
        public readonly ?string $trailerLength = null,
        public readonly ?string $bookingNumber = null,
        public readonly ?Dimensions $dimensions = null,
    ) {
    }
}
