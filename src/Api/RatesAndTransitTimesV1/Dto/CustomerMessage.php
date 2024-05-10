<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerMessage extends Dto
{
    /**
     * @param  ?string  $code  This is a message code.<br> Example:SERVICE.TYPE.INTERNATIONAL.MESSAGE
     * @param  ?string  $message  This is a message description.<br> Example: Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $message = null,
    ) {
    }
}
