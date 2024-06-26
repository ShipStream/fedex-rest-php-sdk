<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingMpsResponse extends Dto
{
    protected static array $complexArrayTypes = [
        'completeTrackResults' => [CompleteTrackResult::class],
        'alerts' => [Alert::class],
    ];

    /**
     * @param  CompleteTrackResult[]|null  $completeTrackResults  Contains the detailed tracking entry information.
     * @param  Alert[]|null  $alerts  The cxs alert type, alert code, and alert messages.<br>Example: example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     */
    public function __construct(
        public readonly ?array $completeTrackResults = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
