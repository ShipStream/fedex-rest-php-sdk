<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityOptionDetail extends Dto
{
    /**
     * @param  ?string  $labelTextOption  Provides the label text option
     * @param  ?string  $customerSuppliedLabelText  'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field.'
     */
    public function __construct(
        public readonly ?string $labelTextOption = null,
        public readonly ?string $customerSuppliedLabelText = null,
    ) {
    }
}
