<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class AccountNumber extends Dto
{
    /**
     * @param  ?string  $value  This is the account number. Max Length is 9. Example: Your account number
     */
    public function __construct(
        public readonly ?string $value = null,
    ) {
    }
}
