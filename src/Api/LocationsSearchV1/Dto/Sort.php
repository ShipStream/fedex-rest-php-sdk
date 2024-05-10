<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class Sort extends Dto
{
    /**
     * @param  ?string  $criteria  Specify the criteria to sort the location details.
     * @param  ?string  $order  Specify the sort order of the location search results, either ascending or descending. Defaults to ascending order.
     */
    public function __construct(
        public readonly ?string $criteria = null,
        public readonly ?string $order = null,
    ) {
    }
}
