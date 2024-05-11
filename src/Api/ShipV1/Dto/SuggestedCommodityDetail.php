<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class SuggestedCommodityDetail extends Dto
{
    /**
     * @param  ?string  $description  This is a suggested commodity description.<br>Example: Commodity
     * @param  ?string  $harmonizedCode  Specify the harmonized code.<br>Example: XXX12
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $harmonizedCode = null,
    ) {
    }
}
