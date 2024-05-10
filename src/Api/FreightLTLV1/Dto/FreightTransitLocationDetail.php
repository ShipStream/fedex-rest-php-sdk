<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightTransitLocationDetail extends Dto
{
    /**
     * @param  ?Distance  $distance  Freight total distance between origin and destination city centers.
     * @param  ?mixed[]  $destinationLocation  Specifies the Freight destination city center information.
     * @param  ?mixed[]  $originLocation  Freight origin city center information.
     */
    public function __construct(
        public readonly ?Distance $distance = null,
        public readonly ?array $destinationLocation = null,
        public readonly ?array $originLocation = null,
    ) {
    }
}
