<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class SearchLocationConstraints extends Dto
{
    /**
     * @param  ?string[]  $locationContentOptions  Specify the information to be included in the location results.
     * @param  ?string  $dropOffTimeNeeded  Specify the preferred drop-off time for a package. This filters the results with locations supporting the specified drop-off time. <br> Example: 16:30:00
     * @param  ?string  $excludeUnavailableLocations  Filter to exclude locations that are currently unavailable.<br>Valid values: True, False.
     */
    public function __construct(
        public readonly ?array $locationContentOptions = null,
        public readonly ?string $dropOffTimeNeeded = null,
        public readonly ?string $excludeUnavailableLocations = null,
    ) {
    }
}
