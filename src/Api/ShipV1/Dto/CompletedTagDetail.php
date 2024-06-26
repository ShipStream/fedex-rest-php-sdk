<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedTagDetail extends Dto
{
    /**
     * @param  string  $confirmationNumber  Confirmation Number.<br>Example: 275
     * @param  string  $location  Applicable for FedEx Express services.<br>Example: NQAA
     * @param  string  $dispatchDate  The dispatch date for the FedEx Tag to be cancelled.<br>Example: 2019-08-03
     */
    public function __construct(
        public readonly string $confirmationNumber,
        public readonly string $location,
        public readonly string $dispatchDate,
    ) {
    }
}
