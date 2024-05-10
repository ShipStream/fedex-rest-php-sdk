<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailDetail extends Dto
{
    /**
     * @param  string  $emailAddress  Specifies email address on which user wants to get notified for various registered events.<br>Example: p1@fedex.com
     * @param  ?string  $name  Specifies the name of the notification recipient.<br>Example: Sam Smith
     */
    public function __construct(
        public readonly string $emailAddress,
        public readonly ?string $name = null,
    ) {
    }
}
