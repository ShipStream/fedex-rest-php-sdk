<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedHazardousShipmentDetail extends Dto
{
    /**
     * @param  ?CompletedHazardousSummaryDetail  $hazardousSummaryDetail  Specifies Completed Hazardous Summary Detail.
     * @param  ?AdrLicenseDetail  $adrLicense  Specifies the details around the ADR license required for shipping.
     * @param  ?ShipmentDryIceDetail  $dryIceDetail  Specifies the shipment level totals of dry ice data across all packages.
     */
    public function __construct(
        public readonly ?CompletedHazardousSummaryDetail $hazardousSummaryDetail = null,
        public readonly ?AdrLicenseDetail $adrLicense = null,
        public readonly ?ShipmentDryIceDetail $dryIceDetail = null,
    ) {
    }
}
