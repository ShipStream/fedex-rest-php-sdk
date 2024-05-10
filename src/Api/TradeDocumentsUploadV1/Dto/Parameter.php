<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class Parameter extends Dto
{
    /**
     * @param  ?string  $value  This is a parameter value. Example: PRIORITY_OVERNIGHT
     * @param  ?string  $key  This is a parameter key.
     */
    public function __construct(
        public readonly ?string $value = null,
        public readonly ?string $key = null,
    ) {
    }
}
