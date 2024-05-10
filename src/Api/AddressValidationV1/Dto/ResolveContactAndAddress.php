<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ResolveContactAndAddress extends Dto
{
    /**
     * @param  Address  $address  This is the Address in detail to be resolved.
     * @param  ?string  $clientReferenceId  Client Reference Id
     */
    public function __construct(
        public readonly Address $address,
        public readonly ?string $clientReferenceId = null,
    ) {
    }
}
