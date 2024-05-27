<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityOptionDetail extends Dto
{
    /**
     * @param  ?string  $labelTextOption  Indicates the label text option.
     * @param  ?string  $customerSuppliedLabelText  'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text'
     */
    public function __construct(
        public readonly ?string $labelTextOption = null,
        public readonly ?string $customerSuppliedLabelText = null,
    ) {
    }
}
