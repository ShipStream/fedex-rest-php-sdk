<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightAccountNumber extends Dto
{
    /**
     * @param  ?string  $value  Specify value of the account number. Maximum length is 9.<br> Example: 123456789
     * @param  ?string  $key  The account key associated with this account number.
     */
    public function __construct(
        public readonly ?string $value = null,
        public readonly ?string $key = null,
    ) {
    }
}
