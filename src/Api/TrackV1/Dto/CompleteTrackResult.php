<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class CompleteTrackResult extends Dto
{
    protected static array $complexArrayTypes = ['trackResults' => [TrackResult::class]];

    /**
     * @param  ?string  $trackingNumber  A tracking number to identify a package.<br> Example: 123456789012
     * @param  TrackResult[]|null  $trackResults  An array of detailed tracking information for the requested packages(s). In case of duplicate shipments, multiple track details will be populated.
     */
    public function __construct(
        public readonly ?string $trackingNumber = null,
        public readonly ?array $trackResults = null,
    ) {
    }
}
