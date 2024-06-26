<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ServiceCommitMessage extends Dto
{
    /**
     * @param  ?string  $message  Field which holds the commitment message for this package.<br> Example: No scheduled delivery date available at this time.
     * @param  ?string  $type  Field which holds the type of service commit message.<br> Example: ESTIMATED_DELIVERY_DATE_UNAVAILABLE
     */
    public function __construct(
        public readonly ?string $message = null,
        public readonly ?string $type = null,
    ) {
    }
}
