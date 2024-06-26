<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaTrackingReferences extends Dto
{
    /**
     * @param  ReferenceInformation  $referencesInformation  Specifies the reference details for the tracked shipment. The following rules apply <br>- Either shipper.AccountNumber or Destination.countryCode(and postal for postal aware countries) are required<br>- If ShipDateRangeBegin and End are not present, shipDateRangeBegin will be set to the current date minus 30 days, and shipDdateRangeEnd will default to current date plus one day.
     * @param  ?bool  $includeDetailedScans  Indicates if the detailed scans are being requested or not. If true, the detailed scans will be included in the response returned. <br>Valid values are True or False.
     */
    public function __construct(
        public readonly ReferenceInformation $referencesInformation,
        public readonly ?bool $includeDetailedScans = null,
    ) {
    }
}
