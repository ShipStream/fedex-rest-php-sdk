<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class AccountNumber extends Dto
{
    /**
     * @param  ?string  $value  This is the account number. Maximum Length is 9. <br>Example: Your account number
     */
    public function __construct(
        public readonly ?string $value = null,
    ) {
    }
}
