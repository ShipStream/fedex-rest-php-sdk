<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentFormatOptionsRequested extends Dto
{
    /**
     * @param  ?string[]  $options  Indicates the format options. SUPPRESS_ADDITIONAL_LANGUAGES value will suppress English language if another language is specified in the language code field.
     */
    public function __construct(
        public readonly ?array $options = null,
    ) {
    }
}
