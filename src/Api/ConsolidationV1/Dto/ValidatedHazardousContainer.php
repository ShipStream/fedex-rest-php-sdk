<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatedHazardousContainer extends Dto
{
    protected static array $complexArrayTypes = ['hazardousCommodities' => ValidatedHazardousCommodityContent::class];

    /**
     * @param  ?float  $qvalue  Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.
     * @param  ValidatedHazardousCommodityContent[]|null  $hazardousCommodities  Indicates the details of the hazardousCommodities in the completed package.
     */
    public function __construct(
        public ?float $qvalue = null,
        public ?array $hazardousCommodities = null,
    ) {}
}