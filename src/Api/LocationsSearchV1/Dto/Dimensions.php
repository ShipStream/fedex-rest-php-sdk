<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class Dimensions extends Dto
{
    /**
     * @param  ?int  $length  Indicate the length of the package. No implied decimal places. Maximum value is 999.<br> Example: 20
     * @param  ?int  $width  Indicate the width of the package. No implied decimal places. Maximum value is 999.<br> Example: 10
     * @param  ?int  $height  Indicate the height of the package. No implied decimal places. Maximum value is 999.<br> Example: 10
     * @param  ?string  $units  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul><i>Note: <ul><li>The maximum/minimum dimension values varies based on the services and the packaging types.</i> Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.</li><li>Any value other than CM including blank/null will default to IN.</li></ul>
     */
    public function __construct(
        public readonly ?int $length = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?string $units = null,
    ) {
    }
}
