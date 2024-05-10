<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RateDiscount extends Dto
{
    /**
     * @param  ?float  $amount  Indicates the details of the charges are to be added to the COD collect amount. <br> Example: 95
     * @param  ?string  $name  Specifies the name of all of the discounts that apply to the package.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?string  $description  Specifies the discounts on this package.
     * @param  ?string  $type  Specifies the type of discount.
     * @param  ?float  $percent  Specifies the percentage of discount.
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
