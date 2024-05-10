<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaTcn extends Dto
{
    /**
     * @param  mixed[]  $tcnInfo  The information associated with the transportation control number.<br>Only 1 TCN is supported per request.
     * @param  ?bool  $includeDetailedScans  Indicates if detailed scans are requested or not. <br/>Valid values are True, or False.
     */
    public function __construct(
        public readonly array $tcnInfo,
        public readonly ?bool $includeDetailedScans = null,
    ) {
    }
}
