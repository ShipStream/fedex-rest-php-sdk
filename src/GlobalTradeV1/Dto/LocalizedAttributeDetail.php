<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class LocalizedAttributeDetail extends Dto
{
    /**
     * @param  ?Localization  $localization  Specify locale details for composing email with the document.
     * @param  ?string  $name  Specifies the name of the product being shipped.
     * @param  ?string  $description  Specifies elabaorate material description and other technical details of the product beingshipped.
     */
    public function __construct(
        public readonly ?Localization $localization = null,
        public readonly ?string $name = null,
        public readonly ?string $description = null,
    ) {
    }
}
