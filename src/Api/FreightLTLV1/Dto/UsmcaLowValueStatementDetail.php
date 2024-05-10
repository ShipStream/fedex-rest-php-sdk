<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class UsmcaLowValueStatementDetail extends Dto
{
    /**
     * @param  string  $customsRole  Specify the shipper role for Customs declaration.
     * @param  ?bool  $countryOfOriginLowValueDocumentRequested  Specify the country Of Origin of Low Value Document for Customs declaration.
     */
    public function __construct(
        public readonly string $customsRole,
        public readonly ?bool $countryOfOriginLowValueDocumentRequested = null,
    ) {
    }
}
