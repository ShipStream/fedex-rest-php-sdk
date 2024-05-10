<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TcnInfo extends Dto
{
    /**
     * @param  string  $value  Field which holds the Transportation Control Number value.<br> Example: N552428361Y555XXX
     * @param  ?string  $carrierCode  Field which holds information about carrier code of the shipment.<br> Example: FDXE
     * @param  ?string  $shipDateBegin  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-03-29
     * @param  ?string  $shipDateEnd  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD <br> Example: 2020-04-01
     */
    public function __construct(
        public readonly string $value,
        public readonly ?string $carrierCode = null,
        public readonly ?string $shipDateBegin = null,
        public readonly ?string $shipDateEnd = null,
    ) {
    }
}
