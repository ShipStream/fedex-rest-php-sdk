<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class AccountNumber extends Dto
{
    /**
     * @param  ?string  $value  Specify value of the account number. Maximum length is 9.<br> Example: XXXXX6789
     */
    public function __construct(
        public readonly ?string $value = null,
    ) {
    }
}
