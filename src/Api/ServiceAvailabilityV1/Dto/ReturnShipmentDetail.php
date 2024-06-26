<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnShipmentDetail extends Dto
{
    /**
     * @param  string  $returnType  This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     */
    public function __construct(
        public readonly string $returnType,
    ) {
    }
}
