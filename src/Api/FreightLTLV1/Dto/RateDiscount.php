<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RateDiscount extends Dto
{
    /**
     * @param  ?float  $amount  Indicates the amount for the rate discount.
     * @param  ?string  $name  Indicate the name of the discount.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?string  $description  Indicates the description for the rate discount.
     * @param  ?string  $type  Indicates the type.
     * @param  ?float  $percent  Indicates the percentage of the rate discount.
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $name = null,
        public readonly ?string $description = null,
        public readonly ?string $type = null,
        public readonly ?float $percent = null,
    ) {
    }
}
