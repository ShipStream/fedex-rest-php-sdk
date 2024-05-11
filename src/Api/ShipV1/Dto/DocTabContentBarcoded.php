<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DocTabContentBarcoded extends Dto
{
    /**
     * @param  ?string  $symbology  Indicates the type of barcode symbology used on FedEx documents and labels.
     * @param  ?DocTabZoneSpecification  $specification  Indicates the doc tab zone specification.
     */
    public function __construct(
        public readonly ?string $symbology = null,
        public readonly ?DocTabZoneSpecification $specification = null,
    ) {
    }
}
