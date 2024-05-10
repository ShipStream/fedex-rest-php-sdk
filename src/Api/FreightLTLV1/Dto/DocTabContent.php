<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class DocTabContent extends Dto
{
    /**
     * @param  ?string  $docTabContentType  Indicates the content type of the doc tab.
     * @param  ?DocTabContentZone001  $zone001  Indicate the doc tab specification for different zones on the label. The specification includes zone number, header and data field to be displayed on the label.
     * @param  ?DocTabContentBarcoded  $barcoded  It is a doc tab content type which is in barcoded format.
     */
    public function __construct(
        public readonly ?string $docTabContentType = null,
        public readonly ?DocTabContentZone001 $zone001 = null,
        public readonly ?DocTabContentBarcoded $barcoded = null,
    ) {
    }
}
