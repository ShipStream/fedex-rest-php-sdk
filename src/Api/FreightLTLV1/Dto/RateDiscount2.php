<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RateDiscount2 extends Dto
{
    /**
     * @param  ?float  $amount  Specifies the amount.<br>Example: 8.9
     * @param  ?string  $rateDiscountType  The type of rate discount. <br/> Valid Values are BONUS, COUPON,EARNED,OTHER,VOLUME.<br>Example: COUPON
     * @param  ?float  $percent  Specifies the percentage of Rate discount.<br>Example: 28.9
     * @param  ?string  $description  Specifies the description of the discounted rate.<br>Example: description
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $rateDiscountType = null,
        public readonly ?float $percent = null,
        public readonly ?string $description = null,
    ) {
    }
}
