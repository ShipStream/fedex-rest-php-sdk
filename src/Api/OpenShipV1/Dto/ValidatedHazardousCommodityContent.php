<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatedHazardousCommodityContent extends Dto
{
    /**
     * @param  ?HazardousCommodityQuantityDetail  $quantity  Indicates the Hazardous Commodity Quantity Detail.
     * @param  ?HazardousCommodityContent  $options  Customer-provided specifications for handling individual commodities.
     * @param  ?ValidatedHazardousCommodityDescription  $description  Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     * @param  ?NetExplosiveDetail  $netExplosiveDetail  Specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * @param  ?float  $massPoints  The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0
     */
    public function __construct(
        public readonly ?HazardousCommodityQuantityDetail $quantity = null,
        public readonly ?HazardousCommodityContent $options = null,
        public readonly ?ValidatedHazardousCommodityDescription $description = null,
        public readonly ?NetExplosiveDetail $netExplosiveDetail = null,
        public readonly ?float $massPoints = null,
    ) {
    }
}
