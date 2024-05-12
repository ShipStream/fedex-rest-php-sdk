<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationsSummaryRequestControlParameters extends Dto
{
    /**
     * @param  ?Distance  $distance  Specifies value and unit of distance between the FedEx locations and the address specified.<br>Example: 2 KM
     * @param  ?int  $maxResults  Specify the maximum number of locations to be returned in the reply.<br><i>Note: This takes precedence over the element multipleMatchesAction value RETURN_ALL.</i>
     */
    public function __construct(
        public readonly ?Distance $distance = null,
        public readonly ?int $maxResults = null,
    ) {
    }
}
