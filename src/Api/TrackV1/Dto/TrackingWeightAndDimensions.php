<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingWeightAndDimensions extends Dto
{
    protected static array $complexArrayTypes = ['weight' => [Weight::class], 'dimensions' => [Dimensions::class]];

    /**
     * @param  Weight[]|null  $weight  Field which holds the weight of the package.
     * @param  Dimensions[]|null  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     */
    public function __construct(
        public readonly ?array $weight = null,
        public readonly ?array $dimensions = null,
    ) {
    }
}
