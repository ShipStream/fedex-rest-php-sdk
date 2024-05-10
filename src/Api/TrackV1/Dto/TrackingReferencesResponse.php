<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingReferencesResponse extends Dto
{
    protected static array $complexArrayTypes = [
        'cxsErrors' => [CxsError::class],
        'completeTrackResults' => [CompleteTrackResult::class],
        'alerts' => [Alert::class],
    ];

    /**
     * @param  CxsError[]|null  $cxsErrors  Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter.
     * @param  CompleteTrackResult[]|null  $completeTrackResults  Contains the detailed tracking entry information.
     * @param  Alert[]|null  $alerts  The cxs alert type, alert code, and alert messages.<br>Example: example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     * @param  ?bool  $successful  Indicates whether the tracking is successful.
     */
    public function __construct(
        public readonly ?array $cxsErrors = null,
        public readonly ?array $completeTrackResults = null,
        public readonly ?array $alerts = null,
        public readonly ?bool $successful = null,
    ) {
    }
}
