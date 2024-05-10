<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityOptionDetail extends Dto
{
    /**
     * @param  ?string  $labelTextOption  Specifies how the customer wishes the label text to be handled for this commodity in this package.
     * @param  ?string  $customerSuppliedLabelText  Text used in labeling the commodity under control of the labelTextOption field.
     */
    public function __construct(
        public readonly ?string $labelTextOption = null,
        public readonly ?string $customerSuppliedLabelText = null,
    ) {
    }
}
