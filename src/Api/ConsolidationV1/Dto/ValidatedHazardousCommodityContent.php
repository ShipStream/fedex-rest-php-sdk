<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatedHazardousCommodityContent extends Dto
{
    /**
     * @param  ?HazardousCommodityQuantityDetail  $quantity  Provides Hazardous Commodity Quantity Detail
     * @param  ?HazardousCommodityContent  $options  Customer-provided specifications for handling individual commodities.
     * @param  ?ValidatedHazardousCommodityDescription  $description  Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
     * @param  ?NetExplosiveDetail  $netExplosiveDetail  specifies the total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * @param  ?float  $massPoints  The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.
     */
    public function __construct(
        public ?HazardousCommodityQuantityDetail $quantity = null,
        public ?HazardousCommodityContent $options = null,
        public ?ValidatedHazardousCommodityDescription $description = null,
        public ?NetExplosiveDetail $netExplosiveDetail = null,
        public ?float $massPoints = null,
    ) {}
}
