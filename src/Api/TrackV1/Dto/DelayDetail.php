<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class DelayDetail extends Dto
{
    /**
     * @param  ?string  $type  Specifies the type of delay.
     * @param  ?string  $subType  Specifies the subType of delay.
     * @param  ?string  $status  Specifies the status of package indicating whether a package is arriving early or is on time or has been delayed.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $subType = null,
        public readonly ?string $status = null,
    ) {
    }
}
