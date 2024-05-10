<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationsSummaryRequestControlParameters extends Dto
{
    /**
     * @param  ?mixed[]  $distance  Specify the unit of measurement and the radius around the address to search FedEx locations.
     * @param  ?int  $maxResults  Specify the maximum number of locations to be returned in the reply.<br><i>Note: This takes precedence over the element multipleMatchesAction value RETURN_ALL.</i>
     */
    public function __construct(
        public readonly ?array $distance = null,
        public readonly ?int $maxResults = null,
    ) {
    }
}
