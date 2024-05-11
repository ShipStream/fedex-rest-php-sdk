<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryLabelContentDetail extends Dto
{
    /**
     * @param  ?string  $generationOptions  Specify the regulatory content preference to be displayed on the label.
     * @param  ?string  $type  Specify the type of regulatory content to be added on the label.
     */
    public function __construct(
        public readonly ?string $generationOptions = null,
        public readonly ?string $type = null,
    ) {
    }
}
