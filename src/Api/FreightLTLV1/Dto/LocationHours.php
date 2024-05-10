<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationHours extends Dto
{
    protected static array $complexArrayTypes = [
        'exceptionalHours' => [TimeRange::class],
        'operationalHours' => [TimeRange::class],
    ];

    /**
     * @param  TimeRange[]|null  $exceptionalHours  Specifies the exceptional hours.
     * @param  ?string  $dayofweek  The days of the week for which this capability applies.
     * @param  TimeRange[]|null  $operationalHours  Specifies the operational hours type.
     * @param  ?string  $exceptionalHoursType  Operating hours for the location that are exception from the normal hours of operation.
     * @param  ?string  $operationalHoursType  Specifies the operating hours for the location that are exception from the normal hours of operation.
     */
    public function __construct(
        public readonly ?array $exceptionalHours = null,
        public readonly ?string $dayofweek = null,
        public readonly ?array $operationalHours = null,
        public readonly ?string $exceptionalHoursType = null,
        public readonly ?string $operationalHoursType = null,
    ) {
    }
}
