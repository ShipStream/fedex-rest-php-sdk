<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class AddressResolutionControlParameters extends Dto
{
    /**
     * @param  ?bool  $includeResolutionTokens  Use this to request detailed information of the address components once the validation is complete. The details specify the changes made to each address component to resolve the address.
     */
    public function __construct(
        public readonly ?bool $includeResolutionTokens = null,
    ) {
    }
}
