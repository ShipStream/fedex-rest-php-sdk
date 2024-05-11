<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentFormatOptionsRequested extends Dto
{
    /**
     * @param  ?string[]  $options  These are processing options.
     */
    public function __construct(
        public readonly ?array $options = null,
    ) {
    }
}
