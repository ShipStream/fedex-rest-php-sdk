<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CarrierDetails extends Dto
{
    /**
     * @param  ?string  $countryRelationshipType  Specifies the country relationship (domestic and/or  international) among the shipments being picked up.
     * @param  ?string  $carrierCodeType  Specifies the type of carrier code.
     * @param  ?LatestDropoffDetails  $latestDropoffDetails  Describes the latest dropoff details for the location.
     */
    public function __construct(
        public readonly ?string $countryRelationshipType = null,
        public readonly ?string $carrierCodeType = null,
        public readonly ?LatestDropoffDetails $latestDropoffDetails = null,
    ) {
    }
}
