<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationHours extends Dto
{
    protected static array $complexArrayTypes = [
        'operationalHours' => [TimeRange::class],
        'exceptionalHours' => [TimeRange::class],
    ];

    /**
     * @param  ?string  $dayofweek  The day of the week for the location hours.
     * @param  ?string  $operationalHoursType  Indicates the type of operational hours.
     * @param  TimeRange[]|null  $operationalHours  List of normal operating hours for the location.
     * @param  ?string  $exceptionalHoursType  Indicates the type of exceptional hours.
     * @param  TimeRange[]|null  $exceptionalHours  List of operating hours for the location that are an exception from the normal hours of operation.
     */
    public function __construct(
        public readonly ?string $dayofweek = null,
        public readonly ?string $operationalHoursType = null,
        public readonly ?array $operationalHours = null,
        public readonly ?string $exceptionalHoursType = null,
        public readonly ?array $exceptionalHours = null,
    ) {
    }
}
