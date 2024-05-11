<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class InternationalControlledExportDetail extends Dto
{
    /**
     * @param  string  $type  Indicate International Controlled Export Type.
     * @param  ?string  $licenseOrPermitExpirationDate  Indicate the expiration date for the license or permit. The format is YYYY-MM-DD.<br>Example: "2019-12-03"
     * @param  ?string  $licenseOrPermitNumber  Indicate License Or Permit Number for the commodity being exported.<br>Example: 11
     * @param  ?string  $entryNumber  Indicate Entry Number for the export.<br>Example: 125
     * @param  ?string  $foreignTradeZoneCode  Indicate the Foreign Trade Zone Code.<br>Example: US
     */
    public function __construct(
        public readonly string $type,
        public readonly ?string $licenseOrPermitExpirationDate = null,
        public readonly ?string $licenseOrPermitNumber = null,
        public readonly ?string $entryNumber = null,
        public readonly ?string $foreignTradeZoneCode = null,
    ) {
    }
}
