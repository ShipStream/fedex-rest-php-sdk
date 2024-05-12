<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightTransitLocationDetail extends Dto
{
    /**
     * @param  ?Distance  $distance  Freight total distance between origin and destination city centers.
     * @param  ?LocationDetail  $destinationLocation
     * @param  ?LocationDetail  $originLocation
     */
    public function __construct(
        public readonly ?Distance $distance = null,
        public readonly ?LocationDetail $destinationLocation = null,
        public readonly ?LocationDetail $originLocation = null,
    ) {
    }
}
